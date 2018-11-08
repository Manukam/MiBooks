<?php

class View_category_model extends CI_Model {

    public function get_category_data($category_id){

        $query_string = "SELECT book.id, book.book_name, authors.author_name,  category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $query = $this->db->query($query_string,array($category_id));
        return $query->result();  
    }

    public function get_sub_categories($category_id){
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->join('category_mapping', 'sub_category.id = category_mapping.sub_category');
        $this->db->where("category_mapping.main_category", $category_id);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_sub_books($category_id,$sub_category_id){
         // $query_string = "SELECT book.book_name, authors.author_name,  category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.sub_cat", $sub_category_id);
        $query = $this->db->get();
        return $query->result();  
    }

    public function get_sub_books_pagination($category_id,$sub_category_id,$length,$start){
         // $query_string = "SELECT book.book_name, authors.author_name,  category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.sub_cat", $sub_category_id);
        $this->db->limit($length,$start);
        $query = $this->db->get();
        return $query->result();  
    }
}

?>
