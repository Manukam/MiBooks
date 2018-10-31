<?php

class Category_books extends CI_Controller {

    public function view_category($category_id){
        echo $category_id;

        $this->load->view('category_view');
        }
}

?>