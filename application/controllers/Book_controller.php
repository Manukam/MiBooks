<?php

class Book_controller extends CI_Controller {

    public function view_book($book_id){
        $this->load->model('Book_model');
        $this->load->model('View_category_model');
        $this->load->model('View_tracking_model');
        $data['category_books'] = $this->View_category_model->get_category_data(2);
        $data['book_details'] = $this->Book_model->get_book_details($book_id);
        //$this->load->view('category_book_view',$data);

        $user_id = $this->session->userdata('user_id'); 
        $this->View_tracking_model->track_views($book_id,$user_id);
        $this->load->view("book_view",$data);
    }

}
?>
