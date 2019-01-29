<?php

class AdminController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("BookModel");
        $this->load->model("AdminModel");
    }

    public function loginView(){
        $this->load->view("AdminLogin");
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($username === 'admin' && $password === '1234'){
            redirect('/AdminController/showDashboard/');
        }else{
            // alert("wrong info");
        }
    }

    public function showDashboard(){
        
        $data['mostViewed'] = $this->BookModel->getMostViewedBookList();
        $data['allBooks'] = $this->BookModel->getAllBooks();

        $categoryViews = $this->AdminModel->getViewedCategories();
        $mostViewedCategories = array();
        foreach($categoryViews as $index=>$views){
            $mostViewedCategories[$index] = $views->NUM;
        }
        $data['mostViewedCategories'] = $mostViewedCategories;
        $data['bookCategories'] = $this->BookModel->getBookCategories();
        $data['totalPageViews'] = $this->AdminModel->getTotalPageViews();
        $data['totalVisitors'] = $this->AdminModel->getVisitors();
        $data['visitorCountPerDay'] = $this->AdminModel->getVisitorCountPerDay();


        $data['authors'] = $this->AdminModel->getAuthors();
        $this->load->view('AdminPage',$data);
    }

    public function getSubCategories($mainCategoryId){
        $subCategories = $this->AdminModel->getSubCategories($mainCategoryId);
        $result= array();
        foreach($subCategories as $index=>$sub){
            $result[$sub->id] = $sub->sub_cat_name;     
         }
        echo json_encode($result);
    }

    public function addBook(){
        $bookName = $this->input->post('bookName');
        $author = $this->input->post('author');
        $mainCat = $this->input->post('mainCat');
        $subCat = $this->input->post('subCat');
        $description = $this->input->post('description');
        $price = $this->input->post('bookPrice');
        // var_dump($book_name);

        $data = array('book_name'=> $bookName,
                        "book_author" => $author,
                    'book_cat'=>$mainCat,
                'sub_cat'=>$subCat,
                'description'=>$description,
                'price'=>$price
            );
        $insertId = $this->BookModel->insertBook($data);

        echo $insertId;
    }

    public function addBookImage($fileName){
        $config['upload_path']= "./assets/images/books/";
        $config['allowed_types']='jpg|png';
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $fileName;
        $config['max_size']  = 1000;
         
        $this->upload->initialize($config);
        if($this->upload->do_upload("book_image")){
            $data = array('upload_data' => $this->upload->data());
            // print_r('uploaded');
            redirect('AdminController/showDashboard#t2');
        }else{
            $response = $this->upload->display_errors();
        }
    }

    public function addCategoryImage($fileName){
        $config['upload_path']= "./assets/images/Category/";
        $config['allowed_types']='jpg|png';
        $config['encrypt_name'] = FALSE;
        $config['file_name'] = $fileName;
        $config['max_size']  = 1000;
         
        $this->upload->initialize($config);
        if($this->upload->do_upload("category_image")){
            $data = array('upload_data' => $this->upload->data());
            redirect('AdminController/showDashboard#t2');
        }else{
            $response = $this->upload->display_errors();
            print_r ($response);
        }
    }

    public function addCategory(){
        $mainCat = $this->input->post("mainCat");
        $subCats = $this->input->post('subCats');

        // var_dump($sub_cats);die;
        $insertCatId = $this->AdminModel->addCategory($mainCat,$subCats);
        echo $insertCatId;
    }

    public function bookValidate(){
        $bookName = $this->input->post("book_name");
        $result = $this->BookModel->checkBook($bookName);
        // print_r($result);
        echo $result;
    }
}

?>
