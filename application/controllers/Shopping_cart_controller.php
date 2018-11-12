<?php

class Shopping_cart_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Book_model");
        $this->load->model("Admin_model");
    }

    public function view_cart(){
        $added_books = $this->session->userdata('cart');
        $shopping_list = array();    
        $sub_total = 0;
        $shipping = 250;
        $tax = 5;
        $total;
        if($added_books != null){
            $shopping_list = $this->get_book_details($added_books);
            $data['shopping_items'] = $shopping_list;
            // var_dump($data['shopping_items']);
            foreach($shopping_list as $book){
                $book[0]->total_price = $book[0]->price * $book[0]->quantity; 
                $sub_total += $book[0]->total_price;
            }
        }else{
            $data['shopping_items'] = NULL;
        }

        $tax = ($sub_total * $tax) / 100; 
        $total = ($sub_total + $shipping) + $tax;

        $data['total_money'] = $total;
        $data['tax'] = $tax;
        $data['sub_total'] = $sub_total;
      

        $this->load->view("shopping_cart",$data);
    }


    public function add_to_cart($book_id,$quantity){
        $shopping_items = $this->session->userdata('cart');
        if(!is_array($shopping_items)){
            $shopping_items = array();
        }
        if(array_key_exists($book_id,$shopping_items)){
            $existing_quantity = $shopping_items[$book_id];
            $shopping_items[$book_id] = $existing_quantity + $quantity;
        } else{
            $shopping_items[$book_id] = $quantity;
        }
        
        $this->session->set_userdata('cart',$shopping_items);

        echo sizeof($shopping_items);
    }

    public function get_book_details(array $books){
        $book_ids = array_keys($books);
        foreach($book_ids as $index=>$book_id){
            $book_details = $this->Book_model->get_book_details($book_id);
            $book_details[0]->quantity = $books[$book_id];
            $shopping_list[$index] = $book_details;
            
        }
        return $shopping_list;
    }


    public function remove_cart_item($book_id){
        $added_books = $this->session->userdata('cart');
        unset($added_books[$book_id]);
        $this->session->set_userdata('cart',$added_books);
        $this->view_cart();
    }

    public function add_one_shopping($book_id){
        $added_books = $this->session->userdata('cart');
        $book_details = $this->Book_model->get_book_details($book_id);
        $quantity = $added_books[$book_id] + 1;
        $added_books[$book_id] = $quantity;
        $this->session->set_userdata('cart',$added_books);
        $added_books = $this->session->userdata('cart');
        $data = array();
        $data['total_price'] = $quantity * $book_details[0]->price;;
        $data['quantity'] = $quantity;
        echo json_encode($data);
    }
    public function remove_one_shopping($book_id){
        $added_books = $this->session->userdata('cart');
        $book_details = $this->Book_model->get_book_details($book_id);
        $quantity = $added_books[$book_id] - 1;
        $added_books[$book_id] = $quantity;
        $this->session->set_userdata('cart',$added_books);
        $added_books = $this->session->userdata('cart');
        $data = array();
        $data['total_price'] = $quantity * $book_details[0]->price;;
        $data['quantity'] = $quantity;
        echo json_encode($data);
    }
}
?>
