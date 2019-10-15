<?php
class FrontModel extends CI_Model {
    public function insertCafe($data)
    {
        $this->db->insert('cafe_join',$data);
    }
    public function getCafess(){
        return  $this->db->get('place')->result_array();
    }
    public function getsingle($id){
        return  $this->db->where('id',$id)->get('place')->row_array();
    }

}
