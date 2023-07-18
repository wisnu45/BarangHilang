<?php

class Barang_model extends CI_Model
{

    //GET

    public function getBarang( $id = null){

        if($id === null){
            return $this->db->get('barang')->result_array();
        }else{
            return $this->db->get_where('barang',['kd_barang' => $id])->result_array();
        }

    }

    function getKodeBarang(){
		return $this->db->query("SELECT kd_barang,nama_barang FROM barang")->result_array();
    }

    function getJumlahBarang($id){
		return $this->db->query("SELECT jml_barang FROM barang where kd_barang = '$id' ")->result_array();
    }
    
    function getStokBarang(){
		return $this->db->query('SELECT barang.kd_barang, barang.nama_barang, barang.jml_barang, penjualan.qty
								FROM barang LEFT JOIN penjualan ON barang.kd_barang = penjualan.kd_barang
								GROUP BY barang.kd_barang
								')->result_array();
	}

    //AKHIR GET




    public function deleteBarang($id)
    {
        $this->db->delete('barang',['kd_barang' => $id]);
        return $this->db->affected_rows(); //berapa baris yang terpengaruhi di db
    }

    
    public function createBarang($data)
    {
        $this->db->insert('barang',$data);
        return $this->db->affected_rows();
    }

    
    public function updateBarang($data,$id)
    {
        $this->db->update('barang',$data,['kd_barang' => $id]);
        return $this->db->affected_rows();
    }

    
}