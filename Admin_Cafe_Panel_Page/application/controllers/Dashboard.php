<?php

class Dashboard extends CI_Controller {

    public function __construct()
    {

        parent::__construct();
//        if(!isset($_SESSION['lg']) == $_SESSION['gl']){
//            redirect(base_url("../home/Login"));
//        }

        $this->dir = 'dashboard';

//        $this->load->model('Cafe_model');
//        $this->load->model('Menu_model');
    }

	public function index($id = 0)
	{

        if(!isset($_SESSION['lg']) or $_SESSION['lg'] != $id){
            redirect(base_url("../home/Login"));
        }
        $_SESSION['gl'] = $id;
	    $this->page ="index";
		$this->load->view('includes/index');
	}

    public function logout()
    {
        unset($_SESSION['lg']);
        unset($_SESSION['gl']);
        redirect(base_url("../home/Login"));
	}
}
