<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suplier_model');
    }

    public function index()
    {
        $data['title'] = 'suplier';

        $this->load->model('Suplier_model', 'suplier');
        $list_suplier = $this->suplier->getAllData();
        $data['list_suplier'] = $list_suplier;
        // $data['list_suplier'] = $this->Suplier_model->getAllData()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail suplier';

        $this->load->model('Suplier_model', 'suplier');
        $id = $this->input->get('id');
        $data['suplier'] = $this->suplier->findMasisById($id);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/detail', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Form suplier';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('Suplier_model', 'suplier');

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');
        $telpon = $this->input->post('telpon');

        //hidden field
        $idedit = $this->input->post('idedit');

        $data = array(
            'id'        => $id,
            'nama'       => $nama,
            'kota'     => $kota,
            'kontak'  => $kontak,
            'alamat'  => $alamat,
            'telpon' => $telpon,
        );
        if (isset($idedit)) {
            $where = array('id' => $id);
            $this->Suplier_model->update_data($where, $data, 'suplier');
            redirect(base_url() . 'suplier/detail?id=' . $id, 'refresh');
        } else {
            $this->Suplier_model->input_data($data, 'suplier');
            redirect(base_url() . 'suplier/detail?id=' . $id, 'refresh');
        }
    }

    public function edit()
    {
        $this->load->model('Suplier_model', 'suplier');

        $id = $this->input->get('id');

        $mhsedit = $this->suplier->findMasisById($id);

        $data['title'] = 'Edit suplier';
        $data['mhsedit'] = $mhsedit;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $this->load->model('Suplier_model', 'suplier');

        $id = $this->input->get('id');

        $this->suplier->delete($id);

        redirect(base_url() . 'suplier/index', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']         = 10024;
        $config['max_width']        = 6000;
        $config['max_height']       = 6000;

        $id = $this->input->post('id');
        $array = explode('.', $_FILES['fotomhs']['name']);
        $extension = end($array);
        $new_name = $id . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotomhs')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('Suplier_model', 'suplier');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $id; // ? ke 2
            $this->suplier->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('suplier/detail', $data);
        }
        redirect(base_url() . 'suplier/detail?id=' . $id);
    }
}