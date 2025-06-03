<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index() {
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('templates/header');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('pasien/form_tambah');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = [
            'nama'           => $this->input->post('nama'),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
            'alamat'         => $this->input->post('alamat'),
            'no_telepon'     => $this->input->post('no_telepon'),
            'keluhan'        => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'dokter'         => $this->input->post('dokter'),
            'status'         => 'diproses'
        ];

        $this->Pasien_model->insert($data);
        redirect('pasien');
    }

    public function hapus($id) {
        $this->Pasien_model->delete($id);
        redirect('pasien');
    }

    public function laporan() {
        $this->load->view('templates/header');
        $this->load->view('pasien/laporan_form');
        $this->load->view('templates/footer');
    }

    public function cetak_laporan() {
        $dari = $this->input->post('tanggal_dari');
        $sampai = $this->input->post('tanggal_sampai');
        $data['pasien'] = $this->Pasien_model->get_laporan($dari, $sampai);
        $this->load->view('pasien/laporan_hasil', $data);
    }
}