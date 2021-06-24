<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{
    public function list_questions()
    {
        $this->db->select('*');
        $this->db->order_by('id_tanya', 'desc');
        $this->db->from('tanya');
        return $this->db->get()->result_array();
    }

    public function searchCategory($kategori)
    {
        $this->db->select('*');
        $this->db->order_by('id_tanya', 'desc');
        $this->db->where('kategori', $kategori);
        $this->db->from('tanya');
        return $this->db->get()->result_array();
    }

    public function getId($id)
    {
        $this->db->get_where('tanya', ['id_tanya' => $id])->row_array();
    }

    function fetch_data($limit, $start, $kategori = null)
    {
        $this->db->select("*");
        $this->db->from("tanya");
        $this->db->join("kategori", "kategori.id = tanya.kategori");
        $this->db->join("user", "user.id_user = tanya.username");
        $this->db->order_by("id_tanya", "DESC");
        if ($kategori != null) {
            $this->db->where("kategori", $kategori);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }
}
