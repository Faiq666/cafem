<?php
class Cafe_model extends CI_Model{
    public function insertdata($data)
    {
        $this->db->insert("place",$data);
    }

    public function getInfo()
    {
        return $this->db->order_by('id','DESC')->get('place')->result_array() ;
    }

    public function getCafe($id)
    {
        return $this->db->where('id',$id)->get('place')->row_array() ;
    }

    public function delete_tableee($id)
    {
        $this->db->where('id',$id)->delete("place");
    }

    public function gallery($data)
    {
        $this->db->insert("gallery",$data);
    }

    public function gallery_get($id)
    {
//        $this->db->select("*");
//        $this->db->from('place');
//        $this->db->join('gallery',"gallery.place_id = place.id");
        return $data = $this->db->where("place_id",$id)->get('gallery')->result_array();

    }

    public function delete_gallery($id)
    {
        $this->db->where('id',$id)->delete("gallery");
    }

    public function cafe_type()
    {
        return $this->db->order_by('id','ASC')->get('cafe_type')->result_array() ;
    }
    public function getNew($where = array()){
        return $this->db->where($where)->get('place')->row_array();
    }
    public function update($id, $data){
        $this->db->where("id", $id)->update("place", $data);
    }

}