<?php
class Cafejoin_model extends CI_Model
{


    public function getCafee()
    {
        return $this->db->get('cafe_join')->result_array();
    }

    public function delete_tablee($id)
    {
        $this->db->where('id',$id)->delete("cafe_join");
    }
}