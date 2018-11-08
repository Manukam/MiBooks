<?php

class Book_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Book_model");
        $this->load->model("Admin_model");
    }


    public function view_book($book_id){
        // $this->load->model('Book_model');
        $this->load->model('View_category_model');
        $this->load->model('View_tracking_model');
        $data['category_books'] = $this->View_category_model->get_category_data(2);
        $data['recent_books'] = $this->get_recent();

        $data['book_details'] = $this->Book_model->get_book_details($book_id);
        

        $user_id = $this->session->userdata('user_id'); 
        $this->View_tracking_model->track_views($book_id,$user_id);
        $this->load->view("book_view",$data);
    }

    public function get_recent(){
        $user_id = $this->session->userdata('user_id');
        return $this->Book_model->get_recent_books($user_id);
    }

    

}
?>
