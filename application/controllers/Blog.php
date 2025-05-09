<?php
class Blog extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('personmodel');
    }
    
    function index() {
        $data['title'] = "My Blog";
        $data['content'] = "Konten Website";
        $this->load->view('blogview', $data);
    }
    
    function add() {
        $data['title'] = 'Tambah Data Orang';
        $data['content'] = 'Form Tambah Orang';
        $this->load->view('addblogview', $data);
    }
    
    function save() {
        $nama_depan = $this->input->post('nama_depan');
        $nama_tengah = $this->input->post('nama_tengah');
        $nama_belakang = $this->input->post('nama_belakang');

        $this->personmodel->save($nama_depan, $nama_tengah, $nama_belakang);
        
        redirect('blog');
    }
    
    function edit($id) {
        $data['title'] = 'Edit Data Orang';
        $data['content'] = 'Form Edit Orang';

        $this->load->view('edit_blog_view', $data);
    }
    
    function update() {
        $id = $this->input->post('id');
        $nama_depan = $this->input->post('nama_depan');
        $nama_tengah = $this->input->post('nama_tengah');
        $nama_belakang = $this->input->post('nama_belakang');
        
        // Update the person data
        $this->personmodel->update($id, $nama_depan, $nama_tengah, $nama_belakang);
        
        redirect('blog');
    }
}
?>