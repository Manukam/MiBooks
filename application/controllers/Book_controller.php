<?php

class Book_controller extends CI_Controller {

    public function view_book(){
        $this->load->model('View_category_model');
        $data['category_books'] = $this->View_category_model->get_category_data(2);
        //$this->load->view('category_book_view',$data);
        $this->load->view("book_view",$data);
    }

}
?>