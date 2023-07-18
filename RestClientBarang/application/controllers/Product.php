<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
    }

    public function index($id){
        $pid = $this->uri->segment(3);
        //echo $pid;
        $productDetail['productDetail'] = $this->products->getProductByID($pid);
        
        // echo "<pre>";
        // print_r($productDetail);
        // echo "</pre>";
        if (!empty($productDetail['productDetail'])) {

            $tipe =  $productDetail['productDetail'][0]['tipe']; //returns the gender so that we can display the trending products.

            $this->load->view('main/header');
            $this->load->view('pages/products', $productDetail);

            if($tipe == 'barang-hilang'){
                $this->load->view('pages/barang-hilang');
            }else{
                $this->load->view('pages/barang-temuan');
            }
            $this->load->view('main/footer');
        }

    }
}