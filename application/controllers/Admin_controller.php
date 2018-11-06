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
        $data['book_categories'] = $this->book_model->get_book_categories();


        $data['authors'] = $this->Admin_model->get_authors();
        $this->load->view('admin_page',$data);
    }

    public function get_sub_categories($main_category_id){
        $this->load->model("Admin_model");
        $sub_categories = $this->Admin_model->get_sub_categories($main_category_id);
        $result= array();
        foreach($sub_categories as $index=>$sub){
            $result[$sub->id] = $sub->sub_cat_name;     
         }
         echo json_encode($result);
    }

    public function add_book(){
        $book_name = $this->input->post('bookName');
        var_dump($book_name);
    }
}

?>