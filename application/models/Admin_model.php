<?php

class Admin_model extends CI_Model {


    public function get_viewed_categories(){
        $query = $this->db->query('SELECT book_cat ,count(*) as NUM FROM (SELECT book.book_name, book.book_cat FROM user_view INNER JOIN book ON book.id = user_view.book_id) AS cate GROUP BY book_cat ORDER BY book_cat');  
        return $query->result();
    }

    public function get_authors(){
        $query = $this->db->get('authors'); 

        return $query->result();
    }

    public function get_sub_categories($main_cat_id){
        $this->db->select("*");
        $this->db->from("category_mapping");
        $this->db->join('sub_category', "sub_category.id = category_mapping.sub_category");
        $this->db->where('category_mapping.main_category', $main_cat_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function add_category($main_cat, $sub_cats){
        $data = array('cat_name'=> $main_cat);
        $sub_categories = array();
        // var_dump($sub_cats);
        foreach($sub_cats as $index=>$sub){
            $sub_categories[$index] = array('sub_cat_name' => $sub['value']);
            // var_dump($sub['value']);die;
        }

        $this->db->insert('category', $data);
        $this->db->insert_batch('sub_category', $sub_categories);
}
    }


?>