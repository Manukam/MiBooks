<?php

class Category_books extends CI_Controller {

    public function view_category($category_id){

        $this->load->model('View_category_model');
        $data['category_books'] = $this->View_category_model->get_category_data($category_id);
        $data['sub_categories'] = $this->View_category_model->get_sub_categories($category_id);
        $this->load->view('category_view',$data);
        }

    public function view_category_books($category_id, $sub_category_id){
        $this->load->model('View_category_model');
        // $data['category_books'] = $this->View_category_model->get_category_data($category_id,$sub_category_id);
        $data['category_books'] = $this->View_category_model->get_sub_books($category_id,$sub_category_id);
        $this->load->view('category_book_view',$data);
    }

    public function get_category_books(){
        $this->load->model('Book_model');
        $mainCat = $this->input->get('mainCat');
        $subCat = $this->input->get('subCat');
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $this->load->model('View_category_model');
        $total_books = $this->Book_model->get_total_books();
        // print_r($start);
        $book_set= $this->View_category_model->get_sub_books_pagination($mainCat,$subCat,$length,$start);
        

        $data = array();

        foreach($book_set as $book) {

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
              "recordsTotal" => $total_books,
              "recordsFiltered" => $total_books,
              "data" => $data
         );
        echo json_encode($result);
    }

}

?>