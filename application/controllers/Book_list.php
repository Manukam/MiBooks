<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_list extends CI_Controller {


    public function __consruct(){
        parent::__construct();   
        
    }

    public function view_list(){
        // $this->load->library('session');
        $this->track_user();
        $this->load->model("book_model");

        $data['book_list'] = $this->book_model->get_book_list();
        $this->load->view("book_list",$data);
    }


    public function track_user(){
        if($this->session->userdata('uuid')){
            echo ("session available");
        }else{
            $newdata = array(
                'uuid'  => '11111',
                'email'     => 'johndoe@some-site.com',
                'logged_in' => TRUE
            );
 
            $this->session->set_userdata($newdata);
            echo "Session added!";
        }
    }
}


?>