<?php class Gallery extends  CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if($_SESSION['lg'] != $_SESSION['gl'] ){
            redirect(base_url("../home/Login"));
        }
        $this->load->model('Gallery_model');

        $this->dir = 'gallery';

//        $this->load->model('Cafe_model');
//        $this->load->model('Menu_model');
    }


    //qalerey hissesi--------------------------------------------------------------------------------------------------------

    public function index()
    {

        $data['gallery'] = $this->Gallery_model->gallery_get($_SESSION['gl']);
        $data['id'] = $_SESSION['gl'];

        $this->page = "index";
        $this->load->view("includes/index",$data);


    }

    public function cafe_gallery_add_act($id)
    {

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]   = "../uploads/cafe_gallery/";

        $this->load->library("upload", $config);

        $upload = $this->upload->do_upload("file");
        // File upload
        if ($upload){

            $data = array(
                'image' => $this->upload->data("file_name"),
                'place_id' => $id,
                'is_profile' => 0,
            );
            $this->Cafe_model->gallery($data);
        }
        // Get data about the file

    }
    public function cafe_gallery_refresh($id)
    {
        $data['gallery'] = $this->Cafe_model->gallery_get($id);
        $data['id'] = $id;

        $this->page = 'cafe_gallery';
        $render_html = $this->load->view("$this->view/render/render_gallery",$data,true);
        echo $render_html;


    }

    public function gallery_delete($id,$cid)
    {
        $this->Cafe_model->delete_gallery($id);
        $data['gallery'] = $this->Cafe_model->gallery_get($cid);
        $data['id'] = $id;

        $this->page = 'cafe_gallery';
        $render_html = $this->load->view("$this->view/render/render_gallery",$data,true);
        echo $render_html;

    }

    public function gallery_active($id)
    {
        echo aaaa;

    }
    ///end of gllery
}
