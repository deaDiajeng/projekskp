<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('User_model', 'Model');
    }

    public function index() {
        $this->load->view('layout/header');
        $this->load->view('login'); 
        $this->load->view('layout/footer');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $user = $this->Model->check_login($username, $password);
        
        if ($user) {
            $this->session->set_userdata('user_id', $user->id_user);
            redirect('dashboard'); // Redirect ke dashboard setelah login
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('login');
        }
    }
    
    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}