<?php
class FrontModel extends CI_Model {
    public function insertCafe($data)
    {
        $this->db->insert('cafe_join',$data);
    }
}
