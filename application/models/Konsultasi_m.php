<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_m extends CI_Model
{
    public function getUserPsikolog()
    {
        $this->db->select('*');
        $this->db->where('user_level', 2);
        return $this->db->get('user')->result_array();
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
}
