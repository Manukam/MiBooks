<?php

class View_tracking extends CI_Controller {

    public function view_book($book_id){
        $this->load->model("View_tracking_model");
        echo $book_id;
        echo $_SESSION['uuid'];
        $this->View_tracking_model->track_views($book_id,$_SESSION['uuid']);


    }
}

?>