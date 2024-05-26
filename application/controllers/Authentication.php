<?php

class Authentication extends CI_Controller {

    public function login() {
        $this->load->view('Templates/header');
 
        $this->load->view('register/login');
        $this->load->view('Templates/footer');
    }

    public function signup() {
        $this->load->view('Templates/header');
   
        $this->load->view('register/signup');
        $this->load->view('Templates/footer');
    }
}
