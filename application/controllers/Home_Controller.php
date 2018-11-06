<?php

class Home_Controller extends CI_Controller {

    public function home_page(){
        $this->check_session();
        $this->load->model("book_model");
        $data['most_viewed'] = $this->book_model->get_most_viewed_book_list();
        $data['categories'] = $this->book_model->get_book_categories();
        $this->load->view("home_page",$data);
    }

    public function check_session(){
        $this->load->model('User_model');
        if($this->session->userdata('user_id')){
            // echo ("session available");
        }else{
            $user_id = uniqid(true);
            $newdata = array(
                'user_id'  => $user_id,
                'logged_in' => TRUE
            );
 
            $this->session->set_userdata($newdata);
            // echo "Session added!";
            $this->User_model->new_user($user_id);

        }
    }
}


?>