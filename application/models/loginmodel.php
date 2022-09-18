<?php
class loginmodel extends CI_Model {
public function isvalidate($username, $password) {
$result = $this->db->where(['username'=>$username,'password'=>$password])
                   ->get('user');
                   
if($result->num_rows()) {
   return $result->row();
}                 
  return false;
}

}

?>