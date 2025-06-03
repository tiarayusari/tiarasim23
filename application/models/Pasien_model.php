<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function get_all_pendaftaran() {
        return $this->db->get('pendaftaran')->result();
    }

    public function insert_pendaftaran($data) {
        return $this->db->insert('pendaftaran', $data);
    }

    public function update_status($idpasien, $status) {
        $this->db->where('idpasien', $idpasien);
        return $this->db->update('pendaftaran', ['status' => $status]);
    }

    public function get_by_status($status) {
        return $this->db->get_where('pendaftaran', ['status' => $status])->result();
    }

    public function delete_pendaftaran($id) {
        return $this->db->delete('pendaftaran', ['idpasien' => $idpasien]);
    }

    public function get_by_id($id) {
        return $this->db->get_where('pendaftaran', ['idpasien' => $idpasien])->row();
    }
}