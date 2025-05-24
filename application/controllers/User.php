<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $this->load->view('pengguna', $data);
    }

    public function add_new() {
        $this->load->view('add_pengguna');
    }

    public function store() {
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $this->User_model->insert_user($data);
        redirect('user');
    }

    public function get_edit($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('edit_pengguna', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (!empty($password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $password = $this->User_model->get_password_by_id($id);
        }

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $this->User_model->update_user($id, $data);
        redirect('user');
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('user');
    }
}
