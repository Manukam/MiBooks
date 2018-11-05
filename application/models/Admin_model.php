<?php

class Admin_model extends CI_Model {


    public function get_viewed_categories(){
        $query = $this->db->query('SELECT book_cat ,count(*) as NUM FROM (SELECT book.book_name, book.book_cat FROM user_view INNER JOIN book ON book.id = user_view.book_id) AS cate GROUP BY book_cat ORDER BY book_cat');  
        return $query->result();
    }
}


?>