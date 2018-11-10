<?php

class Admin_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("book_model");
        $this->load->model("Admin_model");
    }

    public function login_view(){
        $this->load->view("admin_login");
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($username === 'admin' && $password === '1234'){
            redirect('index.php/Admin_controller/show_dashboard/');
        }else{
            // alert("wrong info");
        }
    }

    public function show_dashboard(){
        
        $data['most_viewed'] = $this->book_model->get_most_viewed_book_list();
        $data['all_books'] = $this->book_model->get_all_books();

        $category_views = $this->Admin_model->get_viewed_categories();
        $most_viewed_categories = array();
        foreach($category_views as $index=>$views){
            $most_viewed_categories[$index] = $views->NUM;
        }
        $data['most_viewed_categories'] = $most_viewed_categories;
        $data['book_categories'] = $this->book_model->get_book_categories();
        $data['total_page_views'] = $this->Admin_model->get_total_page_views();
        $data['total_visitors'] = $this->Admin_model->get_visitors();
        $data['visitor_count_per_Day'] = $this->Admin_model->get_visitor_count_per_day();


        $data['authors'] = $this->Admin_model->get_authors();
        $this->load->view('admin_page',$data);
    }

    public function get_sub_categories($main_category_id){
        $sub_categories = $this->Admin_model->get_sub_categories($main_category_id);
        $result= array();
        foreach($sub_categories as $index=>$sub){
            $result[$sub->id] = $sub->sub_cat_name;     
         }
         echo json_encode($result);
    }

    public function add_book(){
        $book_name = $this->input->post('bookName');
        $author = $this->input->post('author');
        $main_cat = $this->input->post('mainCat');
        $sub_cat = $this->input->post('subCat');
        $description = $this->input->post('description');
        $price = $this->input->post('bookPrice');
        // var_dump($book_name);

        $data = array('book_name'=> $book_name,
                        "book_author" => $author,
                    'book_cat'=>$main_cat,
                'sub_cat'=>$sub_cat,
                'description'=>$description,
                'price'=>$price
            );
        $insert_id = $this->book_model->insert_book($data);

        echo $insert_id;
    }

    public function add_book_image($file_name){
        $config['upload_path']= "./assets/images/books/";
        $config['allowed_types']='jpg|png';
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $file_name;
        $config['max_size']  = 1000;
         
        $this->upload->initialize($config);
        if($this->upload->do_upload("book_image")){
            $data = array('upload_data' => $this->upload->data());
            print_r('uploaded');
            redirect('index.php/Admin_controller/show_dashboard#t2');
        }else{
            $response = $this->upload->display_errors();
        }
    }

    public function add_category_image($file_name){
        $config['upload_path']= "./assets/images/Category/";
        $config['allowed_types']='jpg|png';
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $file_name;
        $config['max_size']  = 1000;
         
        $this->upload->initialize($config);
        if($this->upload->do_upload("category_image")){
            $data = array('upload_data' => $this->upload->data());
            redirect('index.php/Admin_controller/show_dashboard#t2');
        }else{
            $response = $this->upload->display_errors();
            print_r ($response);
        }
    }

    public function add_category(){
        $main_cat = $this->input->post("main_cat");
        $sub_cats = $this->input->post('sub_cats');

        // var_dump($sub_cats);die;
        $insert_cat_id = $this->Admin_model->add_category($main_cat,$sub_cats);
        echo $insert_cat_id;
    }

    public function book_validate(){
        $book_name = $this->input->post("book_name");
        $result = $this->book_model->check_book($book_name);
        // print_r($result);
        echo $result;
    }
}

?>
