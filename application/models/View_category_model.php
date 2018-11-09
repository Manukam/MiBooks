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
         $this->db->select("book.id, book.book_name, authors.author_name, book.price");
        // $this->db->select('*');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.sub_cat", $sub_category_id);
        $query = $this->db->get();
        return $query->result();  
    }

    public function get_sub_books_pagination($category_id,$sub_category_id,$length,$start,$search){
        //  $query_string = "SELECT book.book_name, authors.author_name,  category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $this->db->select('book.id , book.book_name, authors.author_name,  book.price');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.sub_cat", $sub_category_id);
        $this->db->group_start();
        $this->db->like('book.book_name', $search);
        $this->db->or_like('authors.author_name', $search);
        $this->db->group_end();
        $this->db->limit($length,$start);
        $query = $this->db->get();
        return $query->result();  
    }

    public function get_random_pic($main_cat){
        $this->db->select('book.id, book.sub_cat');
        $this->db->from('book');
        $this->db->where("book.book_cat", $main_cat);
        $this->db->group_by('book.sub_cat');
        $query = $this->db->get();

        $random_images = array();

        $result = $query->result();

        foreach($result as $book){
            $random_images[$book->sub_cat] = $book->id;
        }
        return $random_images; 
        // SELECT book.book_name, book.id, book.sub_cat  FROM `book` WHERE book.book_cat = 2 GROUP BY book.sub_cat

    }
}

?>
