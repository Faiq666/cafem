<?php
class Cafe extends CI_Controller {
    public function __construct()
    {
        parent::__construct();


        $this->view = 'Cafe';
        $this->loct = 'includes';
        $this->load->model('Cafe_model');
        $this->load->model('Menu_model');


    }

    public function index()
    {
        $data['allmenu'] = $this->Menu_model->get_all_menu();
        $data['places'] =$this->Cafe_model->getInfo();
        $this->page = 'list';
        $this->load->view("$this->loct/index",$data);
    }
    public function cafe_add()
    {
        $this->page = 'cafe_add';
        $this->load->view("$this->loct/index");
    }

    public function add_action()
    {
       $name         =     $this->input->post('name');
       $type         =     $this->input->post('type');
       $location     =     $this->input->post('location');
       $cost         =     $this->input->post('cost');
       $place        =     $this->input->post('place');
       $username     =     $this->input->post('username');
       $password  =    md5($this->input->post('password'));


       $data=array(
           "name"=>$name,
           "type"=>$type,
           "location"=>$location,
           "cost"=>$cost,
           "place"=>$place,
           "username"=>$username,
           "password"=>$password,


       );
       $this->Cafe_model->insertdata($data);
       redirect(base_url("Cafe"));
    }
    public function delete($id)
    {
        $this->Cafe_model->delete_tableee($id);
        redirect(base_url("Cafe/index"));
    }

    //qalerey hissesi--------------------------------------------------------------------------------------------------------

    public function cafe_gallery_add($id)
    {
        $data['gallery'] = $this->Cafe_model->gallery_get($id);
        $data['id'] = $id;

        $this->page = 'cafe_gallery';
        $this->load->view("$this->loct/index",$data);


    }

    public function cafe_gallery_add_act($id)
    {

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]   = "uploads/cafe_gallery/";

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



}