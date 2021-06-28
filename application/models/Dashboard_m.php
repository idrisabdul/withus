<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{
    public function getAllKategori()
    {
        $kategori = $this->db->select('*')->from('kategori')->get()->result();
        return $kategori;
    }

    public function inputKategori($kategori)
    {
        return $this->db->insert('kategori', $kategori);
    }
}
