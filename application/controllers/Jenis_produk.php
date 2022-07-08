<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jenis_produk_model');
    }

    public function index()
    {
        $data['title'] = 'jenis_produk';

        $this->load->model('Jenis_produk_model', 'jenis_produk');
        $list_jenis_produk = $this->jenis_produk->getAllData();
        $data['list_jenis_produk'] = $list_jenis_produk;
        // $data['list_jenis_produk'] = $this->Jenis_produk_model->getAllData()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail jenis_produk';

        $this->load->model('Jenis_produk_model', 'jenis_produk');
        $nama = $this->input->get('id');
        $data['jenis_produk'] = $this->jenis_produk->findMasisById($nama);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/detail', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Form jenis_produk';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('Jenis_produk_model', 'jenis_produk');
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        //hidden field
        $idedit = $this->input->post('idedit');

        $data = array(
            'id' => $id,
            'nama'       => $nama,
        );
        if (isset($idedit)) {
            $where = array('id' => $id);
            $this->Jenis_produk_model->update_data($where, $data, 'jenis_produk');
            redirect(base_url() . 'jenis_produk/detail?id=' . $id, 'refresh');
        } else {
            $this->Jenis_produk_model->input_data($data, 'jenis_produk');
            redirect(base_url() . 'jenis_produk/detail?id=' . $id, 'refresh');
        }
    }

    public function edit()
    {
        $this->load->model('Jenis_produk_model', 'jenis_produk');

        $id = $this->input->get('id');

        $mhsedit = $this->jenis_produk->findMasisById($id);

        $data['title'] = 'Edit jenis_produk';
        $data['mhsedit'] = $mhsedit;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $this->load->model('Jenis_produk_model', 'jenis_produk');

        $id = $this->input->get('id');

        $this->jenis_produk->delete($id);

        redirect(base_url() . 'jenis_produk/index', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']         = 10024;
        $config['max_width']        = 6000;
        $config['max_height']       = 6000;

        $nama = $this->input->post('nama');
        $array = explode('.', $_FILES['fotomhs']['name']);
        $extension = end($array);
        $new_name = $nama . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotomhs')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('Jenis_produk_model', 'jenis_produk');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $nama; // ? ke 2
            $this->jenis_produk->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('jenis_produk/detail', $data);
        }
        redirect(base_url() . 'jenis_produk/detail?id=' . $nama);
    }
}