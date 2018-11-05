<?php

class Admin_controller extends CI_Controller {

    public function login(){
        $this->load->view("admin_login");
    }

    public function show_dashboard(){
        $this->load->model("book_model");
        $this->load->model("Admin_model");
        $data['most_viewed'] = $this->book_model->get_book_list();

        $category_views = $this->Admin_model->get_viewed_categories();
        $most_viewed_categories = array();
        foreach($category_views as $index=>$views){
            $most_viewed_categories[$index] = $views->NUM;
        }
        $data['most_viewed_categories'] = $most_viewed_categories;
        $this->load->view('admin_page',$data);
    }
}

?>