<?php
 class Login extends  CI_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->model('LoginModel');
     }

     public function index(){
         $this->load->view("login");
     }



     public function cafePage()
     {
         $this->load->view('cafePage');
     }

     public function LoginAction()
     {
         $username = $this->input->post("username");
         $password = md5($this->input->post("password"));

        $data = $this->LoginModel->getData($username,$password);



         if ($data){
             $_SESSION['test']=true;
             redirect(base_url('../AdminPanel'));

         }else{
             $this->session->set_userdata('error','Istifadəçi adi vəya parol yanlisdir.');
             redirect(base_url('../AdminPanel'));
         }


     }
 }