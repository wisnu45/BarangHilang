<?php
class Penjualan_model extends CI_Model{
	function __construct(){
		parent:: __construct();
    }
    
    public function getPenjualan( $id = null){

        if($id === null){
            return $this->db->get('penjualan')->result_array();
        }else{
            return $this->db->get_where('penjualan',['kd_penjualan' => $id])->result_array();
        }

    }

    function deletePenjualan($id){
		$this->db->delete('penjualan',['kd_penjualan' => $id]);
        return $this->db->affected_rows();
	}

    public function createPenjualan($data)
    {
        $this->db->insert('penjualan',$data);
        return $this->db->affected_rows();
    }

    
    public function updatePenjualan($data,$id)
    {
        $this->db->update('penjualan',$data,['kd_penjualan' => $id]);
        return $this->db->affected_rows();
    }

    public function cekKodePenjualan()
    {
        return $this->db->query("SELECT MAX(kd_penjualan) as kodepenjualan from penjualan")->result_array();
    }
    
    function getPemasukan(){
		return $this->db->query('SELECT tanggal_penjualan,kd_penjualan,total_bayar FROM penjualan ORDER BY tanggal_penjualan DESC')->result_array();
    }

    function getQT(){
        return $this->db->query('SELECT SUM(qty) as qty,SUM(total_bayar) as total_bayar FROM penjualan')->result_array();
    }

    function getJml(){
        return   $this->db->query("SELECT SUM(jml_barang) as jml_barang FROM barang")->result_array();
    }
    
    function getBarangKeluar(){
        return $this->db->query('SELECT penjualan.kd_barang,barang.nama_barang,penjualan.qty,penjualan.tanggal_penjualan
                                FROM barang INNER JOIN penjualan ON barang.kd_barang = penjualan.kd_barang                            
                                ORDER BY penjualan.tanggal_penjualan DESC')->result_array();
    }
    
}
?>