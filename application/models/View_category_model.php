<?php

class View_category_model extends CI_Model {

    public function get_category_data($category_id){

        $query_string = "SELECT book.book_name, authors.author_name,  category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $query = $this->db->query($query_string,array($category_id));
        return $query->result();  
    }
}

?>