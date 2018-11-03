<?php

class Shopping_cart_controller extends CI_Controller {

    public function view_cart(){
        $added_books = $this->session->userdata('cart');
        // var_dump($this->session->userdata('cart'));
        $this->load->model('Book_model');
        $shopping_list = array();
        if($added_books != null){
            foreach($added_books as $index=>$books){
                $shopping_list[$index] = $this->Book_model->get_book_details($books);
    
            }
            $data['shopping_items'] = $shopping_list;
            // var_dump($data['shopping_items']);
            $this->load->view("shopping_cart",$data);
        }else{
            var_dump("cart empty");
        }
        
    }


    public function add_to_cart($book_id){
        $shopping_items = $this->session->userdata('cart');
        if(!is_array($shopping_items)){
            $shopping_items = array();
            var_dump('here');
        }
        array_push($shopping_items, $book_id);
        $this->session->set_userdata('cart',$shopping_items);
        // var_dump ( $this->session->userdata('cart'));
    }
}
?>