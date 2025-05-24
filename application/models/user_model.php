<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    public function create_user($data) {
        return $this->db->insert('users', $data);
    }
	public function get_all_users() {
        return $this->db->get('users');
    }

    public function get_user_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function get_password_by_id($id) {
        return $this->db->select('password')->get_where('users', ['id' => $id])->row()->password;
    }

    public function insert_user($data) {
        $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
