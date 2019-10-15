<?php
class Cafejoin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->view = 'cafe_request';
        $this->loct = 'includes';
        $this->load->model('Cafe_model');
        $this->load->model('Menu_model');
        $this->load->model('Cafejoin_model');
    }
    public function index()
    {

        $data['cafejoins'] =$this->Cafejoin_model->getCafee();
        $this->page = 'cafe_request';
        $this->load->view("$this->loct/index",$data);


    }
    public function delete($id)
    {
        $this->Cafejoin_model->delete_tablee($id);
        redirect(base_url("Cafejoin/index"));
    }
    }