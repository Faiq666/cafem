<?php
class LoginModel extends CI_Model{
    public function getData($user,$pass)
    {
        return $this->db->where('username',$user)->where('password',$pass)->get("place")->row_array();
    }

}