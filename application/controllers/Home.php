<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function index()
   {
      $this->load->model('Produk_model', 'mahasiswa');
      $list_produk = $this->mahasiswa->getAllData();
      $data['masis'] = $list_produk;

      $this->load->view('home/index', $data);
   }
}