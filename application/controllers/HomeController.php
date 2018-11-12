<?php

class HomeController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("BookModel");
        $this->load->model('UserModel');
    }

    public function homePage(){
        $this->checkSession();
        $data['mostViewed'] = $this->BookModel->getMostViewedBookList();
        $data['categories'] = $this->BookModel->getBookCategories();
        $data['newlyAdded'] = $this->BookModel->getNewlyAdded();
        $this->load->view("HomePage",$data);
    }

    public function checkSession(){
        if($this->session->userdata('userId')){
          //Session available, refresh the session  
        }else{
            $userId = uniqid(true);
            $newdata = array(
                'user_id'  => $userId,
                'logged_in' => TRUE
            );
 
            $this->session->set_userdata($newdata);
            // echo "Session added!";
            $this->UserModel->newUser($userId);

        }
    }
}


?>