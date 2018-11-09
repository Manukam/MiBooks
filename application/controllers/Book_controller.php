<?php

class Book_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Book_model");
        $this->load->model("Admin_model");
        $this->load->model('View_tracking_model');
    }


    public function view_book($book_id){
        $user_id = $this->session->userdata('user_id'); 
        $this->View_tracking_model->track_views($book_id,$user_id); 

        $related_books_all = $this->Book_model->get_related_books($book_id);
        $related_books_filtered = array();

        foreach($related_books_all as  $book){
            if($book->id !== $book_id){
                array_push($related_books_filtered, $book); 
            }
        }

        $data['related_books'] = $related_books_filtered;


        $data['recent_books'] = $this->get_recent();

        $data['book_details'] = $this->Book_model->get_book_details($book_id);
        


        $this->load->view("book_view",$data);
    }

    public function get_recent(){
        $user_id = $this->session->userdata('user_id');
        return $this->Book_model->get_recent_books($user_id);
    }

    

}
?>
