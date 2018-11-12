<?php

class CategoryBooks extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("BookModel");
        $this->load->model('ViewCategoryModel');
    }

    public function viewCategory($categoryId){ 
        $data['categoryBooks'] = $this->ViewCategoryModel->getCategoryData($categoryId);
        $data['subCategories'] = $this->ViewCategoryModel->getSubCategories($categoryId);
        $data['imagesSubCat'] = $this->ViewCategoryModel->getRandomPic($categoryId);
        $data['categoryName'] = $this->ViewCategoryModel->getCategoryName($categoryId);
        $this->load->view('CategoryView',$data);
    }

    public function viewCategoryBooks($categoryId, $subCategoryId){
        $data['categoryBooks'] = $this->ViewCategoryModel->getSubBooks($categoryId,$subCategoryId);
        $data['subCategoryName'] = $this->ViewCategoryModel->getSubCategoryName($subCategoryId);
        $this->load->view('categoryBookView',$data);
    }

    public function getCategoryBooks(){
        $mainCat = $this->input->get('mainCat');
        $subCat = $this->input->get('subCat');
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $search = $this->input->get('search[value]');
        $totalBooks = $this->BookModel->getTotalBooks($subCat);
        $bookSet= $this->ViewCategoryModel->getSubBooksPagination($mainCat,$subCat,$length,$start,$search);
        

        $data = array();

        foreach($bookSet as $book) {

             $data[] = array(
                $book->id,
                  $book->book_name,
                  $book->author_name,
                  $book->price
                 
                //   $book->publisher
             );
        }


        $result = array(
            "draw" => $draw,
              "recordsTotal" => $totalBooks,
              "recordsFiltered" => $totalBooks,
              "data" => $data
         );
        echo json_encode($result);
    }

}

?>