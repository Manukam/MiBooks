<?php

class Admin_controller extends CI_Controller {

    public function login_view(){
        $this->load->view("admin_login");
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($username === 'admin' && $password === '1234'){
            $this->show_dashboard();
        }else{
            // alert("wrong info");
        }
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