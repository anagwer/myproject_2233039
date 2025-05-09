<?php
class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('product_model');
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }
    function index(){
        $data ['product'] = $this->product_model->get_product();
        $this->load->view('product_view', $data);
    }
    function add_new(){
        $this->load->view('add_product_view');
    }
    function save(){
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $this->product_model->save($nama_produk,$harga_produk);
        redirect('product');
    }
    function delete(){
        $id_produk = $this->uri->segment(3);
        $this->product_model->delete($id_produk);
        redirect('product');
    }
    function get_edit(){
        $id_produk = $this->uri->segment(3);
        $result = $this->product_model->get_product_id($id_produk);
        if ($result->num_rows() > 0){
            $i =$result->row_array();
            $data = array(
                'id_produk' => $i['id_produk'],
                'nama_produk' => $i['nama_produk'],
                'harga_produk' => $i['harga_produk']
            );
            $this->load->view('edit_product_view', $data);
        }else{
            echo "<script> alert('Data Was Not Fund')</script>";
        }
    }
    function update(){
        $id_produk = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk =$this->input->post('harga_produk');
        $this->product_model->update($id_produk,$nama_produk,$harga_produk);
        redirect('product');
    }
    function search(){
        $keyword = $this->input->get('keyword');
        $data['product'] = $this->product_model->search_product($keyword);
        $this->load->view('product_view', $data);
    }
}
?>