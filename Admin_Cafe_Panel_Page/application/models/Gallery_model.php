<?php class Gallery_model extends CI_Model {

    public function gallery_get($id)
    {
        return $data = $this->db->where("place_id",$id)->get('gallery')->result_array();
    }
}
