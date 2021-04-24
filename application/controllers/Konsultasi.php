<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konsultasi_m');
    }

    public function index()
    {
        $data['user_psikolog'] = $this->Konsultasi_m->getUserPsikolog();
        // var_dump($data);
        $this->template->load('template', 'konsultasi/v_showPsikiater', $data);
    }

    public function chat($id)
    {
        $data['user'] = $this->Konsultasi_m->getUserId($id);
        $this->template->load('template', 'konsultasi/v_chatPsikolog', $data);
    }

    public function input_chat()
    {
        $pesan = [
            'pesan_masuk' => $this->input->post('pesan_masuk'),
            'pesan_keluar' => $this->input->post('pesan_keluar'),
            'pesan' => $this->input->post('pesan')
        ];
        $data = $this->Konsultasi_m->insert_chat($pesan);
        echo json_encode($data);
    }
}
