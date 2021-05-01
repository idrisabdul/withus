<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';


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

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '6d9d97acfa4a94ce7d0a',
            'fa6e35a36420328fe9eb',
            '1192537',
            $options
        );


        // $data['message'] = 'hello world';

        if ($this->db->insert('chat', $pesan)) {
            $push = $this->db->order_by('id_chat', 'asc');
            $push = $this->db->from('chat');
            $push = $this->db->get('')->result();


            foreach ($push as $key) {
                $data_push[] = $key;
            }
            $pusher->trigger('my-channel', 'my-event', $data_push);
        }
        // echo json_encode($data);
    }
}
