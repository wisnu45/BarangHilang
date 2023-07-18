<?php

use Restserver\libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Penjualan extends REST_Controller
{

    public function __construct(){
        parent:: __construct();
        $this->load->model('Penjualan_model','penjualan'); // setelah koma alias
        $this->load->model('Barang_model','barang');
        //per method per jam
        //$this->methods['index_get']['limit'] = 100;
    }

    //GET
    
    public function index_get()
    {

        $id = $this->get('kd_penjualan');
        if($id === null){
            $penjualan = $this->penjualan->getPenjualan();
        }else{
            $penjualan = $this->penjualan->getPenjualan($id);
        }

        if($penjualan){
            $this->response([
                'status' => TRUE,
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function KodePenjualan_get()
    {
        $penjualan = $this->penjualan->cekKodePenjualan();

        if($penjualan){
            $this->response([
                'status' => TRUE,
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function barangKeluar_get()
    {
        $penjualan = $this->penjualan->getBarangKeluar();

        if($penjualan){
            $this->response([
                'status' => TRUE,
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function pemasukan_get()
    {
        $penjualan = $this->penjualan->getPemasukan();

        if($penjualan){
            $this->response([
                'status' => TRUE,
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function QT_get()
    {
        $penjualan = $this->penjualan->getQT();

        if($penjualan){
            $this->response([
                'status' => 'TRUE',
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function Jml_get()
    {
        $penjualan = $this->penjualan->getJml();

        if($penjualan){
            $this->response([
                'status' => 'TRUE',
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }


    //AKHIR GET

    public function index_delete()
    {
        $id = $this->delete('kd_penjualan');

        if($id === null){
            $this->response([
                'status' => FALSE,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_NO_CONTENT);
        }else{
            if($this->penjualan->deletePenjualan($id) > 0){
                $this->response([
                    'status' => TRUE,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }

    }


    public function index_post()
    {
        $data = [
            'kd_penjualan' => $this->post('kd_penjualan'),
            'kd_barang' => $this->post('kd_barang'),
            'qty' => $this->post('qty'),
            'total_bayar' => $this->post('total_bayar'),
            'tanggal_penjualan' => $this->post('tanggal_penjualan')
        ];

        $id = $this->post('kd_barang');
        
        $fetch = $this->barang->getJumlahBarang($id);
        $jml_barang = $fetch[0]['jml_barang'];
        $qty = $this->post('qty');
        $stok = $jml_barang - $qty;
        
        $data2 = [
            'jml_barang' => $stok 
        ];
        //update stok
        $this->barang->updateBarang($data2,$id);

        if($this->penjualan->createPenjualan($data) >0 ){
            $this->response([
                'status' => TRUE,
                'message' => 'new data!'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'failed to add data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        
    }



    public function index_put(){
        $id = $this->put('kd_penjualan');
        $data = [
            'kd_penjualan' => $this->put('kd_penjualan'),
            'kd_barang' => $this->put('kd_barang'),
            'qty' => $this->put('qty'),
            'total_bayar' => $this->put('total_bayar'),
            'tanggal_penjualan' => $this->put('tanggal_penjualan')
        ];

        if($this->penjualan->updatePenjualan($data,$id) >0 ){
            $this->response([
                'status' => TRUE,
                'message' => 'data updated!'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

    }


}