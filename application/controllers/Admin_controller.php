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
        $data['most_viewed'] = $this->book_model->get_most_viewed_book_list();

        $category_views = $this->Admin_model->get_viewed_categories();
        $most_viewed_categories = array();
        foreach($category_views as $index=>$views){
            $most_viewed_categories[$index] = $views->NUM;
        }
        $data['most_viewed_categories'] = $most_viewed_categories;
        $data['book_categories'] = $this->book_model->get_book_categories();
        $data['total_page_views'] = $this->Admin_model->get_total_page_views();
        $data['total_visitors'] = $this->Admin_model->get_visitors();


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
        $this->load->model("Book_model");
        $book_name = $this->input->post('bookName');
        $author = $this->input->post('author');
        $main_cat = $this->input->post('mainCat');
        $sub_cat = $this->input->post('subCat');
        $description = $this->input->post('description');
        // var_dump($book_name);

        $data = array('book_name'=> $book_name,
                        "book_author" => $author,
                    'book_cat'=>$main_cat,
                'sub_cat'=>$sub_cat,
                'description'=>$description
            );
        $insert_id = $this->Book_model->insert_book($data);

        echo $insert_id;
    }

    public function add_image($file_name){
        $config['upload_path']= "./assets/images/books/";
        $config['allowed_types']='jpg|png';
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $file_name;
        $config['max_size']  = 1000;
         
        $this->upload->initialize($config);
        if($this->upload->do_upload("book_image")){
            $data = array('upload_data' => $this->upload->data());
            $this->show_dashboard();
        }else{
            $response = $this->upload->display_errors();
        }
    }

    public function add_category(){
        $this->load->model("Admin_model");
        $main_cat = $this->input->post("main_cat");
        $sub_cats = $this->input->post('sub_cats');

        // var_dump($sub_cats);die;
        $this->Admin_model->add_category($main_cat,$sub_cats);
    }
}

?>
