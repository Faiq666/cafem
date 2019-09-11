<?php class Menu_model extends CI_Model{

    public function get_menu()
    {
      return  $this->db->list_fields('menu');
    }

    public function get_sub_menu($i)
    {
        return $this->db->list_fields($i);
    }

    public function menu_add($data,$i)
    {
       $this->db->insert($i,$data);
      return $this->db->insert_id();
    }

    public function menu_add_id($data)
    {
        $this->db->insert('menu',$data);
    }

}