<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{
    function index()
    {
        $this->load->view('templates_masyarakat/header');
        $this->load->view('templates_masyarakat/sidebar');
        $this->load->view('masyarakat/home');
        $this->load->view('templates_masyarakat/footer');
    }

    public function buat_pengaduan()
    {
        $data['masyarakat'] = $this->db->get('masyarakat')->row_array();
        $this->load->view('templates_masyarakat/header', $data);
        $this->load->view('templates_masyarakat/sidebar');
        $this->load->view('masyarakat/buat_pengaduan');
        $this->load->view('templates_masyarakat/footer');
    }
}
