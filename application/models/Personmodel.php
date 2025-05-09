<?php
class Personmodel extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_person() {
        $result = $this->db->get('person');
        return $result;
    }
    function save($nama_depan, $nama_tengah, $nama_belakang) {
        $data = array(
            'nama_depan' => $nama_depan, 
            'nama_tengah' => $nama_tengah,
            'nama_belakang' => $nama_belakang
        );
        $this->db->insert('person', $data);
    }
    function get_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('person');
        return $query->row();
    }
    function update($id, $nama_depan, $nama_tengah, $nama_belakang) {
        $data = array(
            'nama_depan' => $nama_depan,
            'nama_tengah' => $nama_tengah,
            'nama_belakang' => $nama_belakang
        );
        
        $this->db->update('person', $data);
    }
}