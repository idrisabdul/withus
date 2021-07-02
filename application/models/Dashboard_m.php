<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{
    public function getAllKategori()
    {
        $kategori = $this->db->select('*')->from('kategori')->get()->result();
        return $kategori;
    }

    public function getAllUser()
    {
        $user = $this->db->select('*')->from('user')->where('user_level !=', 0)->get()->result();
        return $user;
    }

    //CRUD USER
    public function deleteUser($id)
    {
        return $this->db->delete('user', ['id_user' => $id]);
    }

    public function getAllKonsultan()
    {
        $user_consultan = $this->db->select('*')
            ->from('user_consultan')
            ->join('kategori', 'kategori.id = user_consultan.kategori')
            ->join('user', 'user.id_user = user_consultan.user_id')
            ->get()->result();
        return $user_consultan;
    }

    public function inputKategori($kategori)
    {
        return $this->db->insert('kategori', $kategori);
    }

    public function updateKategori($kategori, $id)
    {
        return $this->db->update('kategori', $kategori, ['id' => $id]);
    }

    public function deleteKategori($id)
    {
        return $this->db->delete('kategori', ['id' => $id]);
    }
}
