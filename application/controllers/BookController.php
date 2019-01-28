<?php

class BookController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("BookModel");
        $this->load->model("ViewTrackingModel");
    }


    public function viewBook($bookId){
        $userId = $this->session->userdata('user_id'); 
        $this->ViewTrackingModel->trackViews($bookId,$userId); 

        $relatedBooksAll = $this->BookModel->getRelatedBooks($bookId);
        $relatedBooksFiltered = array();

        foreach($relatedBooksAll as  $book){
            if($book->id !== $bookId){
                array_push($relatedBooksFiltered, $book); 
            }
        }

        $data['relatedBooks'] = $relatedBooksFiltered;


        $data['recentBooks'] = $this->getRecent();

        $data['bookDetails'] = $this->BookModel->getBookDetails($bookId);
        


        $this->load->view("BookView",$data);
    }

    public function getRecent(){
        $userId = $this->session->userdata('user_id');
        return $this->BookModel->getRecentBooks($userId);
    }

    

}
?>
