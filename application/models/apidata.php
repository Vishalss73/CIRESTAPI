<?php
class apidata extends CI_Model {

public function get_apidata() {
    $query = $this->db->get('apidemodata');
    return $query->result();
}

public function post_apidata($data) {
   $query =  $this->db->insert('apidemodata', $data);
      if($query) {
     $querystatus = $this->db->affected_rows();
    return $querystatus;
      }
      else {
         return false;
      }
 }

public function put_apidata( $id, $data) {
  $query =  $this->db->where('id',$id)
     ->update('apidemodata',$data);
     if($query) {
    $querystatus = $this->db->affected_rows();
   return $querystatus;
     }
     else {
        return false;
     }
}
public function delete_apidata( $id) {
   $query =   $this->db->where('id', $id)
                    ->delete('apidemodata');
      if($query) {
     $querystatus = $this->db->affected_rows();
    return $querystatus;
      }
      else {
         return false;
      }
 }
}