<?php

class ViewCategoryModel extends CI_Model {

    public function getCategoryData($categoryId){

        $queryString = "SELECT book.id, book.book_name, authors.author_name, book.price, category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $query = $this->db->query($queryString,array($categoryId));
        return $query->result();  
    }

    public function getSubCategories($categoryId){
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->join('category_mapping', 'sub_category.id = category_mapping.sub_category');
        $this->db->where("category_mapping.main_category", $categoryId);
        $query = $this->db->get();

        return $query->result();
    }

    public function getSubBooks($categoryId,$subCategoryId){
         $this->db->select("book.id, book.book_name, authors.author_name, book.price");
        // $this->db->select('*');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.sub_cat", $subCategoryId);
        $query = $this->db->get();
        return $query->result();  
    }

    public function get_sub_books_pagination($categoryId,$subCategoryId,$length,$start,$search){
        //  $query_string = "SELECT book.book_name, authors.author_name,  category.cat_name from book INNER JOIN authors ON book.book_author = authors.id INNER JOIN category ON book.book_cat = category.id WHERE category.id = ?";
        $this->db->select('book.id , book.book_name, authors.author_name,  book.price');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.sub_cat", $subCategoryId);
        $this->db->group_start();
        $this->db->like('book.book_name', $search);
        $this->db->or_like('authors.author_name', $search);
        $this->db->group_end();
        $this->db->limit($length,$start);
        $query = $this->db->get();
        return $query->result();  
    }

    public function get_random_pic($mainCat){
        $this->db->select('book.id, book.sub_cat');
        $this->db->from('book');
        $this->db->where("book.book_cat", $mainCat);
        $this->db->group_by('book.sub_cat');
        $query = $this->db->get();

        $randomImages = array();

        $result = $query->result();

        foreach($result as $book){
            $randomImages[$book->sub_cat] = $book->id;
        }
        return $randomImages; 
        // SELECT book.book_name, book.id, book.sub_cat  FROM `book` WHERE book.book_cat = 2 GROUP BY book.sub_cat

    }

    public function getCategoryName($mainCat){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where("category.id", $mainCat);
        $query = $this->db->get();
        return $query->result();
    }

    public function getSubCategoryName($subCat){
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where("sub_category.id", $subCat);
        $query = $this->db->get();
        return $query->result();
    }
}

?>
