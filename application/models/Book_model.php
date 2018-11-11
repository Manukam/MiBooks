<?php

class Book_model extends CI_Model {

    public function get_most_viewed_book_list(){
        $this->load->model("Book");
        $query = $this->db->query('SELECT book.id, book.book_name, authors.author_name, user_view.book_id,book.price, count(user_view.book_id) as NUM FROM user_view RIGHT JOIN book ON book.id = user_view.book_id INNER JOIN authors ON authors.id = book.book_author GROUP BY book.id ORDER BY NUM DESC');  
        
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
        $this->db->select('book.id, book.book_name, book.book_author, book.book_cat, authors.author_name, book.price, 0 as quantity, 0 as toal_price');
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
        $this->db->select('book.id, book.book_name, authors.author_name, user_view.book_id, count(user_view.book_id) as NUM');
        $this->db->group_by('book.id');
        $this->db->order_by('NUM','desc');
        $this->db->from('user_view');
        $this->db->join('book', 'book.id  = user_view.book_id', 'right');
        $this->db->join('authors', 'authors.id = book.book_author');
        // $this->db->join('authors', 'authors.id = book.book_author');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_total_books($sub_cat){
        $this->db->select("COUNT(book.id) as num");
        $this->db->from('book');
        $this->db->where("book.sub_cat", $sub_cat);
        $query = $this->db->get();
        $result = $query->row();
        if(isset($result)) {
            return $result->num;
        }
        
        return 0;
      }

      public function get_newly_added(){
        $this->db->select('book.id, book.book_name, authors.author_name, book.price');
        $this->db->group_by('book.id');
        $this->db->order_by('book.id','desc');
        $this->db->from('book');
        // $this->db->join('book', 'book.id  = user_view.book_id', 'right');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->limit(10);
        // $this->db->join('authors', 'authors.id = book.book_author');
        $query = $this->db->get();
        return $query->result();
      }

      public function get_recent_books($user_id){
        $this->db->select('book.id, book.book_name, authors.author_name, book.price');
        $this->db->from('book');
        $this->db->join('user_view', 'user_view.book_id = book.id');
        $this->db->join('authors', 'authors.id = book.book_author');
        $this->db->where('user_view.user_id', $user_id);
        $this->db->group_by('book.id');
        $this->db->order_by('user_view.time','desc');
        $query = $this->db->get();
        return $query->result();
      }

      public function get_related_books($book_id){

        $this->db->select('user_view.user_id');
        $this->db->from('user_view');
        $this->db->where('user_view.book_id',$book_id);
        $query = $this->db->get();
        $user_list_array = $query->result();
        $user_list = array();

        foreach($user_list_array as $index=>$user){
            $user_list[$index] = $user->user_id;
        }

        $this->db->select('count(user_view.book_id) as Views, book.id,book.book_name, book.price, authors.author_name');
        $this->db->from('user_view');
        $this->db->join('book', 'book.id = user_view.book_id');
        $this->db->join('authors', 'book.book_author = authors.id');
        $this->db->where_in('user_view.user_id', $user_list);   
        $this->db->group_by('book.id');
        $this->db->order_by('Views','desc');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query->result();
      }
  
}


?>
