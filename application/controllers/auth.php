<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function login() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('register');
    }

    public function login_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username);
            redirect('product');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('auth/login');
        }
    }

    public function register_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->User_model->get_user($username)) {
            $this->session->set_flashdata('error', 'Username sudah terdaftar.');
            redirect('auth/register');
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $this->User_model->create_user([
            'username' => $username,
            'password' => $hashed_password
        ]);

        $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');
        redirect('auth/login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
