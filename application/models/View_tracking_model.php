<?php

class View_tracking_model extends CI_Model {

    public function track_views($book_id, $user_id){
        $data = array('user_id'=> $user_id,
                        "book_id" => $book_id);

        $this->db->insert('user_view', $data);
    }
}


?>