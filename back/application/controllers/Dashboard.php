<?php
class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();


        $this->view = 'dashboard';
        $this->loct = 'includes';


    }

    public function index()
    {
        $this->page = 'main';
        $this->load->view("$this->loct/index");
    }

    public function gallery()
    {
        $this->page = 'gallery';
        $this->load->view("$this->loct/index");
    }
}