<?php

class Admin_controller extends CI_Controller {

    public function login(){
        $this->load->view("admin_login");
    }

    public function show_dashboard(){
        $this->load->model("book_model");
        $data['most_viewed'] = $this->book_model->get_book_list();

        $data['dataPoints'] = array( 
            array("label"=>"Oxygen", "symbol" => "O","y"=>46.6),
            array("label"=>"Silicon", "symbol" => "Si","y"=>27.7),
            array("label"=>"Aluminium", "symbol" => "Al","y"=>13.9),
            array("label"=>"Iron", "symbol" => "Fe","y"=>5),
            array("label"=>"Calcium", "symbol" => "Ca","y"=>3.6),
            array("label"=>"Sodium", "symbol" => "Na","y"=>2.6),
            array("label"=>"Magnesium", "symbol" => "Mg","y"=>2.1),
            array("label"=>"Others", "symbol" => "Others","y"=>1.5),
         
        );
        $this->load->view('admin_page',$data);
    }
}

?>