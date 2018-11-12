<?php 
class UserModel extends CI_Model {

    public function newUser($userId){
        $data = array('user_id'=>$userId);
        $this->db->insert('users',$data);
    }
}
?>