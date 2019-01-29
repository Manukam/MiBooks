<?php

class AdminModel extends CI_Model {


    public function getViewedCategories(){
        $query = $this->db->query('SELECT book_cat ,count(*) as NUM FROM (SELECT book.book_name, book.book_cat FROM user_view INNER JOIN book ON book.id = user_view.book_id) AS cate GROUP BY book_cat ORDER BY book_cat');  
        return $query->result();
    }

    public function getAuthors(){
        $query = $this->db->get('authors'); 

        return $query->result();
    }

    public function getSubCategories($mainCatId){
        $this->db->select("*");
        $this->db->from("category_mapping");
        $this->db->join('sub_category', "sub_category.id = category_mapping.sub_category");
        $this->db->where('category_mapping.main_category', $mainCatId);
        $query = $this->db->get();
        return $query->result();
    }

    public function addCategory($mainCat, $subCats){
        $data = array('cat_name'=> $mainCat);
        $this->db->insert('category', $data);
        $mainCategoryId = $this->db->insert_id();
        
        $subCategories = array();
        foreach($subCats as $index=>$sub){
            $subCategories = array('sub_cat_name' => $sub['value']);
            $this->db->insert('sub_category', $subCategories);
            $subCatId = $this->db->insert_id();
            $mapping = array('main_category'=>$mainCategoryId, 'sub_category'=>$subCatId);
            // print_r($mapping);
            $this->db->insert('category_mapping', $mapping);
        }    
        
        return $mainCategoryId;
    }

    public function getTotalPageViews(){
        return  $this->db->count_all_results('user_view');
    }

    public function getVisitors(){
        return $this->db->count_all_results('users');
    }

    public function getVisitorCountPerDay(){
        $query = $this->db->query('SELECT DATE(user_view.time) as Day, count(EXTRACT(DAY FROM user_view.time)) as COUNT from user_view group by EXTRACT(DAY from user_view.time)');  
        return $query->result();
    }
}


?>