<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');
    }

    public function index()
    {
        $data['kategori'] = $this->Dashboard_m->getAllKategori();
        $this->template->load('template', 'Dashboard/v_dashboard', $data);
    }

    public function addKategori()
    {
        $data = [
            'nm_kategori' => $this->input->post('kategori'),
        ];
        $this->Dashboard_m->inputKategori($data);
        redirect('Dashboard');
    }
}
