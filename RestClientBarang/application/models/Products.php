<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Products extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

        function productsList($tipe, $category){

            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('tipe', $tipe);
            $this->db->where('category', $category);
            $categorizedList = $this->db->get()->result_array();
            return $categorizedList;
            
        }

        function allproducts($tipe){

            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('tipe', $tipe);
            $productList = $this->db->get()->result_array();
            return $productList;
        
        }

        function subCategory($tipe){
            $this->db->distinct();
            $this->db->select('subcategory');
            $this->db->from('product');
            $this->db->where('tipe', $tipe);
            $subCategories = $this->db->get()->result_array();
            return $subCategories;

        }

        function getProductByID($id){
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('pid', $id);
            $productDetail = $this->db->get()->result_array();
            return $productDetail;


        }

        function checkCart($pid, $ipAddr, $status){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('product_id', $pid);
            $this->db->where('ip_address', $ipAddr);
            $this->db->where('status', $status);
            $cartChecked = $this->db->get()->result_array();
            return $cartChecked;
        }

        function insertCart($cartData){
            $this->db->insert('cart', $cartData);
        }

        function showCart($ipAddr){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('ip_address', $ipAddr);
            $cartItems = $this->db->get()->result_array();
            return $cartItems;
        }

        function getProductsForCart($implodedValue){
         
            if (!empty($implodedValue)) {
                $data = explode(',', $implodedValue);
            }
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where_in('pid', $data);
            $this->db->join('cart', 'cart.product_id = product.pid');
                  
            $productDetail = $this->db->get()->result_array();
            return $productDetail;
        }

        function deleteCartItem($id, $status){
            $this->db->where('product_id', $id);
            $this->db->where('status', $status);
            $this->db->delete('cart');
        }
    }
