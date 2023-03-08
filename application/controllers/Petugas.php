<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_petugas/header');
        $this->load->view('templates_petugas/sidebar');
        $this->load->view('petugas/home');
        $this->load->view('templates_petugas/footer');
    }

    public function data_pengaduan()
    {
        $data['pengaduan'] = $this->M_pengaduan->ambil_data();
        $data['tanggapan'] = $this->db->get('tanggapan')
            ->result_array();
        // $query = "SELECT * FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik = masyarakat.nik INNER JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan";
        // $data['pengaduan'] = $this->db->query($query)->result_array();
        // var_dump($data['pengaduan']);
        // die;
        $data['petugas'] = $this->db->get_where('petugas')->row_array();
        $this->load->view('templates_petugas/header', $data);
        $this->load->view('templates_petugas/sidebar');
        $this->load->view('petugas/data_pengaduan');
        $this->load->view('templates_petugas/footer');
    }

    function tanggapi()
    {
        $status = array('status' => $this->input->post('status'));
        $data = [
            'id_pengaduan' => $this->input->post('id_pengaduan'),
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $this->input->post('tanggapan'),
            'id_petugas' => $this->input->post('id_petugas'),
            'nik' => $this->input->post('nik'),
        ];

        $this->db->insert('tanggapan', $data);
        $this->db->where('id_pengaduan', $this->input->post('id_pengaduan'));
        // $this->db->where('id_tanggapan', $this->input->post('id_tanggapan'));
        $this->db->update('pengaduan', $status);
        redirect('petugas/data_pengaduan');
    }

    public function data_tanggapan()
    {
        $query = "SELECT * FROM tanggapan JOIN pengaduan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas JOIN masyarakat ON tanggapan.nik = masyarakat.nik";
        $data['petugas'] = $this->db->query($query)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('petugas/data_tanggapan');
        $this->load->view('templates/footer');
    }

    public function cari()
    {
        $status = $this->input->get('status');

        $query = "SELECT * FROM tanggapan JOIN pengaduan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan 
        JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas JOIN masyarakat ON tanggapan.nik = masyarakat.nik
        WHERE pengaduan.status='" . $status . "'";
        $data['petugas'] = $this->db->query($query)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('petugas/data_tanggapan');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
