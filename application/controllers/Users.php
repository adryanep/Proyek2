<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function index()
    {
        $data['title'] = 'users';

        $this->load->model('Users_model', 'users');
        $list_users = $this->users->getAllData();
        $data['list_users'] = $list_users;
        // $data['list_users'] = $this->Users_model->getAllData()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('users/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail users';

        $this->load->model('Users_model', 'users');
        $id = $this->input->get('id');
        $data['users'] = $this->users->findMasisById($id);

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('users/detail', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['title'] = 'Form users';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('users/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('Users_model', 'users');

        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $created_at = $this->input->post('created_at');
        $last_login = $this->input->post('last_login');
        $status = $this->input->post('status');
        $role = $this->input->post('role');
        //hidden field
        $idedit = $this->input->post('idedit');

        $data = array(
            'id'        => $id,
            'username'       => $username,
            'password'     => $password,
            'email'  => $email,
            'created_at'  => $created_at,
            'last_login' => $last_login,
            'role'        => $role
        );
        if (isset($idedit)) {
            $where = array('id' => $id);
            $this->Users_model->update_data($where, $data, 'users');
            redirect(base_url() . 'users/detail?id=' . $id, 'refresh');
        } else {
            $this->Users_model->input_data($data, 'users');
            redirect(base_url() . 'users/', 'refresh');
        }
    }

    public function edit()
    {
        $this->load->model('Users_model', 'users');

        $id = $this->input->get('id');

        $mhsedit = $this->users->findMasisById($id);

        $data['title'] = 'Edit users';
        $data['mhsedit'] = $mhsedit;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('users/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete()
    {
        $this->load->model('Users_model', 'users');

        $id = $this->input->get('id');

        $this->users->delete($id);

        redirect(base_url() . 'users/index', 'refresh');
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
            $this->load->model('Users_model', 'users');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $id; // ? ke 2
            $this->users->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('users/detail', $data);
        }
        redirect(base_url() . 'users/detail?id=' . $id);
    }
}