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

    public function get_menu($id)
    {
        return $this->db->where('place_id',$id)->get('menu')->result_array();
    }
    public function get_sub_menu($data,$id)
    {
        return $this->db->where('id',$id)->get($data)->result_array();
    }
    public function get_menu_t()
    {
        return $this->db->list_fields('menu');
    }

    public function get_gallery($id)
    {
        return $this->db->where('place_id',$id)->get('gallery')->result_array();
    }

}
