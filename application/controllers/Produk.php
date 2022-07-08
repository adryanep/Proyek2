<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['title'] = 'produk';

        $this->load->model('Produk_model', 'produk');
        $list_produk = $this->produk->getAllData();
        $data['list_produk'] = $list_produk;
        // $data['list_produk'] = $this->Produk_model->getAllData()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('produk/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail produk';

        $this->load->model('Produk_model', 'produk');
        $kode = $this->input->get('id');
        $data['produk'] = $this->produk->findMasisById($kode);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('produk/detail', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Form produk';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('produk/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('produk_model', 'produk');

        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $stok = $this->input->post('stok');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
        $jenis_id = $this->input->post('jenis_id');
        $deskripsi = $this->input->post('deskripsi');
        //hidden field
        $idedit = $this->input->post('idedit');

        $data = array(
            'kode'        => $kode,
            'nama'       => $nama,
            'stok'     => $stok,
            'harga_beli'  => $harga_beli,
            'harga_jual'  => $harga_jual,
            'jenis_id' => $jenis_id,
            'deskripsi'        => $deskripsi
        );
        if (isset($idedit)) {
            $where = array('kode' => $kode);
            $this->Produk_model->update_data($where, $data, 'produk');
            redirect(base_url() . 'Produk/detail?id=' . $kode, 'refresh');
        } else {
            $this->Produk_model->input_data($data, 'produk');
            redirect(base_url() . 'Produk/detail?id=' . $kode, 'refresh');
        }
    }

    public function edit()
    {
        $this->load->model('produk_model', 'produk');

        $id = $this->input->get('id');

        $mhsedit = $this->produk->findMasisById($id);

        $data['title'] = 'Edit Produk';
        $data['mhsedit'] = $mhsedit;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('produk/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $this->load->model('Produk_model', 'produk');

        $id = $this->input->get('id');

        $this->produk->delete($id);

        redirect(base_url() . 'produk/index', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']         = 10024;
        $config['max_width']        = 6000;
        $config['max_height']       = 6000;

        $kode = $this->input->post('kode');
        $array = explode('.', $_FILES['fotomhs']['name']);
        $extension = end($array);
        $new_name = $kode . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotomhs')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('Produk_model', 'produk');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $kode; // ? ke 2
            $this->produk->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('produk/detail', $data);
        }
        redirect(base_url() . 'produk/detail?id=' . $kode);
    }
}