<?php
class Menu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();


        $this->view = 'menu';
        $this->loct = 'includes';


    }

    public function index()
    {
        $this->page = 'list';
        $this->load->view("$this->loct/index");
    }
    public function menu_add()
    {
        $this->page = 'menu_add';
        $this->load->view("$this->loct/index");
    }


}