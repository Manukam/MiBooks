<?php

class Home_Controller extends CI_Controller {

    public function home_page(){
        $this->load->model("book_model");
        $data['most_viewed'] = $this->book_model->get_book_list();
        $this->load->view("home_page",$data);
    }
}


?>