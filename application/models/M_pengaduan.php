<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengaduan extends CI_Model
{
    function ambil_data()
    {
        $query = "SELECT * FROM pengaduan JOIN masyarakat ON pengaduan.nik = masyarakat.nik";
        return $this->db->query($query)->result_array();
    }
}
