<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_m');
    }

    public function index()
    {
        $data['title'] = 'Profile';

        // Menampilkan jumlah pertanyaan, jawaban, dan apresiasi
        $user = $this->session->userdata('username');
        $data['jumlahtanya'] = $this->db->query("SELECT pertanyaan FROM tanya WHERE username = '$user'")->num_rows();
        $data['jumlahjawab'] = $this->db->query("SELECT jawaban FROM jawab WHERE nama_jawab = '$user'")->num_rows();
        $sum_like = $this->db->query("SELECT SUM(rating) as rat FROM jawab WHERE nama_jawab = '$user'")->result_array();
        foreach ($sum_like as $sl) {
            $data['jumlahapresiasi'] = $sl['rat'];
        }

        //Menampilkan Daftar Jawaban
        $data['list_answer'] = $this->profile_m->list_answer($user);
        //Menampilkan Daftar Pertanyaan
        $data['list_questions'] = $this->profile_m->list_questions($user);

        $this->load->library('Pagination_bootstrap');

        $this->template->load('template', 'Profile/v_profile', $data);
    }
}
