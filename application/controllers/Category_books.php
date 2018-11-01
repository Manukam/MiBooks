<?php

class Category_books extends CI_Controller {

    public function view_category($category_id){

        $this->load->model('View_category_model');
        $data['category_books'] = $this->View_category_model->get_category_data($category_id);
        $this->load->view('category_view',$data);
        }

    public function view_category_books($category_id, $sub_category_id){
        $this->load->model('View_category_model');
        $data['category_books'] = $this->View_category_model->get_category_data($category_id);
        $this->load->view('category_book_view',$data);
    }

}

?>