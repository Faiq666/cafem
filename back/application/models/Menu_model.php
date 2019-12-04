<?php class Menu_model extends CI_Model{

    public function get_menu()
    {
      return  $this->db->list_fields('menu');
    }
    public function get_menu_id($id)
    {
        return  $this->db->where('id',$id)->get('menu')->row_array();
    }

    public function menu_delete($id)
    {
        $this->db->where('id',$id)->delete('menu');
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

    public function get_single_menu($id)
    {
        return $this->db->where('place_id',$id)->get('menu')->row_array();
    }

    public function get_sub_menu_single($table,$id)
    {
        return $this->db->where('id',$id)->get($table)->row_array();
    }

    public function get_all_menu()
    {
        return $this->db->get('menu')->result_array();
    }

    public function delete_table($table_name,$table_id)
    {
        $this->db->where('id',$table_id)->delete($table_name);
    }

    public function delete_menu_column($menu_id,$data)
    {
        $this->db->where('id',$menu_id)->update('menu',$data);
    }
    public function get_single_menu_by_id($id)
    {
        return $this->db->where('id',$id)->get('menu')->row_array();
    }
    public function menu_update($data,$i)
    {
        $this->db->insert($i,$data);
        return $this->db->insert_id();
    }

    public function menu_update_id($data)
    {
        $this->db->update('menu',$data);
    }

}