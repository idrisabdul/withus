<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jawab_m extends CI_Model
{
    public function show($id_tanya)
    {
        $this->db->select("*");
        $this->db->from("tanya");
        $this->db->join("kategori", "kategori.id = tanya.kategori");
        $this->db->join("user", "user.id_user = tanya.username");
        $this->db->order_by("id_tanya", "DESC");
        $this->db->where('id_tanya', $id_tanya);
        return $this->db->get()->row_array();
    }

    public function input($data)
    {
        $this->db->insert('jawab', $data);
    }

    public function showJawab($id_tanya)
    {
        $this->db->select('*');
        $this->db->order_by('rating', 'desc');
        $this->db->from('jawab');
        $this->db->join('user', 'user.id_user = jawab.nama_jawab');
        $this->db->where('id_tanya', $id_tanya);
        return $this->db->get()->result_array();
    }

    public function deleteJawab($id_jawab)
    {
        return $this->db->delete('jawab', ['id_jawab' => $id_jawab]);
    }

    public function updateRatingJawab($id)
    {
    }
}
