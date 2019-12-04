<?php
class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('FrontModel');
    }

    public function index()
    {
        $_SESSION['page'] = 'home';
        $this->load->view('home');
    }

    public function filter($type = null)
    {
        $data['cafesss']=$this->FrontModel->getCafess();
        $this->load->view('list',$data);
    }
    public function add(){
        $this->load->view('addcafe');
    }
    public function single($id){
        $data['menu']=$this->FrontModel->get_menu($id);
//        print_r('<br>');
        $data['menu_t']=$this->FrontModel->get_menu_t();
//        print_r($data['menu_t']);

        foreach (array_slice($data['menu_t'],2)   as  $item){
//            print_r('<br>');
            if ($data['menu']['0'][$item] != 0) {
                $data[$item] = $this->FrontModel->get_sub_menu($item, $data['menu']['0'][$item]);

//                print_r($data[$item]);
            }

        }

        $data['images'] = $this->FrontModel->get_gallery($id);


        $data['cafe']=$this->FrontModel->getsingle($id);
        $this->load->view('singlepage',$data);
    }


    public function addAct()
    {

        $name = $this->input->post('name');
        $number  = $this->input->post('number');
        $location=$this->input->post('location');
        $description=$this->input->post('description');




            if (!empty($name) && !empty($number) ){

                $data = array(
                    'name' => $name,
                    'number'  => $number,
                    'location'=>$location,
                    'description' => $description,
                );

                $this->FrontModel->insertCafe($data);
                redirect(base_url("Home/index"));

            }else{

                redirect('Home/add');
            }

        }







}