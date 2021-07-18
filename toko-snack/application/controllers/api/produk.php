<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class produk extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_api', 'papi');
    }

    public function produk_post()
    {
        $category_id = $this->post('kategori');

        if ($category_id === null) {
            $data_barang = $this->papi->dapat_data_all();
        } else {
            $product = $this->papi->dapat_kategori_id($category_id);
            foreach ($product as $product_category){
                $data_barang = $this->papi->dapat_data($product_category['id']);
            }
        }
        if ($data_barang) {
            $this->response([
                'status' => true,
                'message' => 'makanan ketemu',
                'data_product' => $data_barang
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'makanan tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function produk_detail_post()
    {
        $nama_produk = $this->post('name');
        if ($nama_produk === null) {
            $this->response([
                'status' => false,
                'message' => 'error'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $detail_produk = $this->papi->produk_detail($nama_produk);
        }
        if ($detail_produk) {
            $this->response([
                'status' => true,
                'message' => 'makanan ketemu',
                'data_produk' => $detail_produk
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'produk ini sudah tidak ada'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function kategori_get()
    {
        $kategori = $this->papi->kategori();
        if ($kategori) {
            $this->response([
                'status' => true,
                'message' => 'makanan ketemu',
                'kategori' => $kategori
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>