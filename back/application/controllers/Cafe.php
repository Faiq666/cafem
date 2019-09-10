<?php
class Cafe extends CI_Controller {
    public function __construct()
    {
        parent::__construct();


        $this->view = 'Cafe';
        $this->loct = 'includes';
        $this->load->model('Cafe_model');


    }

    public function index()
    {
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
       $name    =     $this->input->post('name');
       $type    =     $this->input->post('type');
       $location=     $this->input->post('location');
       $cost    =     $this->input->post('cost');
       $place   =     $this->input->post('place');


       $data=array(
           "name"=>$name,
           "type"=>$type,
           "location"=>$location,
           "cost"=>$cost,
           "place"=>$place,


       );
       $this->Cafe_model->insertdata($data);
       redirect(base_url("Cafe"));












    }


}