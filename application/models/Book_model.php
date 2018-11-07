<?php

class Book_model extends CI_Model {

    public function get_most_viewed_book_list(){
        $this->load->model("Book");
        $query = $this->db->query('SELECT book.book_name, book.book_author, authors.author_name, book.price, book.id, user_view.book_id, count(*) as NUM FROM user_view INNER JOIN book ON book.id = user_view.book_id INNER JOIN authors ON book.book_author = authors.id GROUP BY book_id ORDER BY NUM DESC LIMIT 10');  
        
        // foreach ($query->result('Book') as $user)
        // {
        // echo $user->book_name; // access attributes
        // // echo $user->reverse_name(); // or methods defined on the 'User' class
        // }

        return $query->result();
    }


    public function get_book_categories(){
        $query = $this->db->get('category'); 

        return $query->result();
    }

    public function get_book_details($book_id){
        $this->db->select('book.id, book.book_name, book.book_author, book.book_cat, authors.author_name, 0 as quantity');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where("book.id", $book_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_book($data){
        $this->db->insert("book",$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function check_book($book_name){
        $query = $this->db->get_where('book',array('book_name' => $book_name));
        $count = $query->num_rows();
        // print_r($count);
        if($count == 0){
            return ('false');
        }else{
            return('true');
        }
        
    }

    public function get_all_books(){
        $this->db->select('book.id as id_book, book.book_name, book.book_author, book.book_cat, authors.author_name, book.price');
        $this->db->from('book');
        $this->db->join('authors', 'authors.id = book.book_author');
        $query = $this->db->get();
        return $query->result();
    }
}


?>
