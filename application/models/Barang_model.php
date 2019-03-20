<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Barang_model extends CI_Model {
	
    private $_table = "Barang";
    public $kodeBarang;
    public $namaBarang;
    public $deskripsi;
    public $stok;
    public $harga;

    //untuk mengambil seluruh data keseluruhan dari tabel barang
    public function getAll(){
        //mysqli_query("select * from barang ;");
        return $this->db->get($this->_table->result;);
    }
    //untuk ambil data per baris berdasarkan kode barang
    public function getAllById($kodeBarang){
        //mysqli_query("select * from barang where kodeBarang='.$kodeBarang'")
        return $this->db->get_where($this->_table, ['kodeBarang' => $kode])->row();
    }
    //untuk  menyimpan hasil inputan ke db
    public function save(){
        $post=$this->input->post();
        $this->kodeBarang=$post['kodeBarang'];
        $this->namaBarang=$post['namaBarang'];
        $this->deskripsi=$post['deskripsi'];
        $this->stok=$post['stok'];
    }
    //untuk melakukan edit data
    public function edit($kode){
        $post=$this->input->post();
        $this->kodeBarang=$post['kodeBarang'];
        $this->namaBarang=$post['namaBarang'];
        $this->deskripsi=$post['deskripsi'];
        $this->stok=$post['stok'];
        $this->db->update($this->_table, $this, array('kodeBarang'=> $post['kodeBarang']));
    }
    //untuk hapus data
    public function delete($kode){
        $this->db->delete($this->_table, $this, array('kodeBarang'=> $kode));
    }
}