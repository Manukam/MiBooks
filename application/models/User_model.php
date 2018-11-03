<?php 
class User_model extends CI_Model {

    public function new_user($user_id){
        $data = array('user_id'=>$user_id);
        $this->db->insert('users',$data);
    }
}
?>