<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('add_to_cart'))
{
    function add_to_cart($book_id,$quantity)
    {
        $shopping_items = $this->session->userdata('cart');
        if(!is_array($shopping_items)){
            $shopping_items = array();
            // var_dump('here');
        }
        if(array_key_exists($book_id,$shopping_items)){
            $existing_quantity = $shopping_items[$book_id];
            $shopping_items[$book_id] = $existing_quantity + $quantity;
        } else{
            $shopping_items[$book_id] = $quantity;
        }
        
        $this->session->set_userdata('cart',$shopping_items);
        // var_dump ( $this->session->userdata('cart'));
        // $this->load->view("book_view",$book_id);
    }   
}