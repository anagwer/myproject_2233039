<?php
class Product_model extends CI_Model{
    function get_product(){
        $result = $this->db->get('product');
        return $result;
    }
    function save($nama_produk,$harga_produk){
        $data = array(
            'nama_produk' => $nama_produk, 
            'harga_produk' => $harga_produk
        );
         $this->db->insert('product', $data);
    }
    function delete($id_produk){
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('product');
    }
    function get_product_id($id_produk){
        $query = $this->db->get_where('product', array('id_produk' => $id_produk));
        return $query;
    }
    function update($id_produk,$nama_produk,$harga_produk){
        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk
        );
        $this->db->where('id_produk',$id_produk);
        $this->db->update('product', $data);
    }
    function search_product($keyword){
        $this->db->like('nama_produk', $keyword);
        $query = $this->db->get('product');
        return $query;
    }
}