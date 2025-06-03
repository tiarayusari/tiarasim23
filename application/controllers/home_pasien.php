<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomePasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->HomePasien_model->get_all();
        $this->load->view('layout/header'); // bagian header AdminLTE
        $this->load->view('home_pasien/index', $data); // konten data pasien
        $this->load->view('layout/footer'); // bagian footer
    }

    public function detail($id)
    {
        $data['pasien'] = $this->HomePasien_model->get_by_id($id);

        if (!$data['pasien']) {
            show_404(); // jika data tidak ditemukan
        }

        $this->load->view('layout/header');
        $this->load->view('home_pasien/detail', $data);
        $this->load->view('layout/footer');
    }
}