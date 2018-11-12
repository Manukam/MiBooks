<?php

class ShoppingCartController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Book_model");
        $this->load->model("Admin_model");
    }

    public function view_cart(){
        $addedBooks = $this->session->userdata('cart');
        $shoppingList = array();    
        $subTotal = 0;
        $shipping = 250;
        $tax = 5;
        $total;
        if($addedBooks != null){
            $shoppingList = $this->getBookDetails($addedBooks);
            $data['shoppingItems'] = $shoppingList;
            foreach($shoppingList as $book){
                $book[0]->totalPrice = $book[0]->price * $book[0]->quantity; 
                $subTotal += $book[0]->totalPrice;
            }
        }else{
            $data['shoppingItems'] = NULL;
        }

        $tax = ($subTotal * $tax) / 100; 
        $total = ($subTotal + $shipping) + $tax;

        $data['totalMoney'] = $total;
        $data['tax'] = $tax;
        $data['subTotal'] = $subTotal;
      

        $this->load->view("ShoppingCart",$data);
    }


    public function addToCart($bookId,$quantity){
        $shoppingItems = $this->session->userdata('cart');
        if(!is_array($shoppingItems)){
            $shoppingItems = array();
        }
        if(array_key_exists($bookId,$shoppingItems)){
            $existingQuantity = $shoppingItems[$bookId];
            $shoppingItems[$bookId] = $existingQuantity + $quantity;
        } else{
            $shoppingItems[$bookId] = $quantity;
        }
        
        $this->session->set_userdata('cart',$shoppingItems);

        echo sizeof($shoppingItems);
    }

    public function getBookDetails(array $books){
        $bookIds = array_keys($books);
        foreach($bookIds as $index=>$bookId){
            $bookDetails = $this->Book_model->get_book_details($bookId);
            $bookDetails[0]->quantity = $books[$bookId];
            $shoppingList[$index] = $bookDetails;
            
        }
        return $shoppingList;
    }


    public function removeCartItem($bookId){
        $addedBooks = $this->session->userdata('cart');
        unset($addedBooks[$bookId]);
        $this->session->set_userdata('cart',$addedBooks);
        $this->viewCart();
    }

    public function addOneShopping($bookId){
        $addedBooks = $this->session->userdata('cart');
        $bookDetails = $this->Book_model->getBookDetails($bookId);
        $quantity = $addedBooks[$bookId] + 1;
        $addedBooks[$bookId] = $quantity;
        $this->session->set_userdata('cart',$addedBooks);
        $addedBooks = $this->session->userdata('cart');
        $data = array();
        $data['totalPrice'] = $quantity * $bookDetails[0]->price;;
        $data['quantity'] = $quantity;
        echo json_encode($data);
    }
    public function removeOneShopping($bookId){
        $addedBooks = $this->session->userdata('cart');
        $bookDetails = $this->Book_model->getBookDetails($bookId);
        $quantity = $addedBooks[$bookId] - 1;
        $addedBooks[$bookId] = $quantity;
        $this->session->set_userdata('cart',$addedBooks);
        $addedBooks = $this->session->userdata('cart');
        $data = array();
        $data['totalPrice'] = $quantity * $bookDetails[0]->price;;
        $data['quantity'] = $quantity;
        echo json_encode($data);
    }
}
?>
