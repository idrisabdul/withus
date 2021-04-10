<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{
    public function list_answer($user)
    {
        $this->db->select('*');
        $this->db->order_by('id_jawab', 'desc');
        $this->db->from('jawab');
        $this->db->where('nama_jawab', $user);
        return $this->db->get()->result_array();
    }

    public function list_questions($user)
    {
        return $this->db->query("SELECT pertanyaan, jawaban, count(*) as totaljawab FROM jawab WHERE nama_nanya = '$user' GROUP BY pertanyaan ORDER BY rating DESC")->result_array();
    }
}
