<?php
class Home extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FrontModel');
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function filter()
    {
        $this->load->view('list');
    }
    public function add(){
        $this->load->view('addcafe');
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