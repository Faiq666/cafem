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


}