<?php

class ViewTrackingModel extends CI_Model {

    public function trackViews($bookId, $userId){
        $data = array('user_id'=> $userId,
                        "book_id" => $bookId);

        $this->db->insert('user_view', $data);
    }
}


?>