<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_m extends CI_Model
{
    public function getUserPsikolog()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        return $this->db->get('user_consultan')->result_array();
    }

    public function getUserId($id)
    {
        $this->db->select('*');
        $this->db->where('id_user', $id);
        return $this->db->get('user')->result_array();
    }

    public function insert_chat($pesan)
    {
        $this->db->insert('chat', $pesan);
    }

    public function showChat($idpesan_masuk, $idpesan_keluar)
    {
        $qry = "SELECT * FROM chat WHERE pesan_masuk = $idpesan_masuk AND pesan_keluar = $idpesan_keluar OR pesan_masuk = $idpesan_keluar AND pesan_keluar = $idpesan_masuk";
        return $this->db->query($qry)->result_array();
    }

    public function lastChat($idpesan_masuk, $idpesan_keluar)
    {
        $qry = "SELECT * FROM chat WHERE pesan_masuk = $idpesan_masuk AND pesan_keluar = $idpesan_keluar OR pesan_masuk = $idpesan_keluar AND pesan_keluar = $idpesan_masuk ORDER BY id_chat DESC LIMIT 1";
        return $this->db->query($qry)->result_array();
    }

    public function storeKonsultan($data)
    {
        return $this->db->insert('user_consultan', $data);
    }
}
