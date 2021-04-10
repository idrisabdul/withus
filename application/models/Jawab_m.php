<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jawab_m extends CI_Model
{
    public function show($id)
    {
        return $this->db->get_where('tanya', ['id_tanya' => $id])->row_array();
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
