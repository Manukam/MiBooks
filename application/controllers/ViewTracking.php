<?php

class ViewTracking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("ViewTrackingModel");
    }

    public function viewBook($bookId){
        echo $bookId;
        echo $_SESSION['uuid'];
        $this->ViewTrackingModel->trackViews($bookId,$_SESSION['uuid']);


    }
}

?>