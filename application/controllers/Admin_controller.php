<?php

class Admin_controller extends CI_Controller {

    public function login(){
        $this->load->view("admin_login");
    }

    public function show_dashboard(){
        $this->load->view('admin_page');
    }
}

?>