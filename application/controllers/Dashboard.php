<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');

        if ($this->session->userdata('id_user') != 1) {
            show_404();
        }
    }

    public function index()
    {
        $data['kategori'] = $this->Dashboard_m->getAllKategori();
        $data['user'] = $this->Dashboard_m->getAllUser();
        $data['konsultan'] = $this->Dashboard_m->getAllKonsultan();

        $data['jml_pengajuan'] = $this->db->query("SELECT * FROM user_consultan WHERE status = 0")->num_rows();
        $this->template->load('template', 'Dashboard/v_dashboard', $data);
    }

    //CRUD USER
    public function deleteUser($id)
    {
        $this->Dashboard_m->deleteUser($id);
        $this->session->set_flashdata('message_user', '<div class="alert alert-danger" role="alert">User Berhasil Dihapus</div>');
        redirect('Dashboard');
    }

    //CRUD KATEGORI
    public function addKategori()
    {
        $data = [
            'nm_kategori' => $this->input->post('kategori'),
        ];
        $this->Dashboard_m->inputKategori($data);
        $this->session->set_flashdata('message_kategori', '<div class="alert alert-info" role="alert">Kategori Berhasil Ditambah</div>');
        redirect('Dashboard');
    }

    public function editKategori()
    {
        $id = $this->input->post('id');
        $data = [
            'nm_kategori' => $this->input->post('kategori'),
        ];
        $this->Dashboard_m->updateKategori($data, $id);
        $this->session->set_flashdata('message_kategori', '<div class="alert alert-info" role="alert">Kategori Berhasil Diedit</div>');
        redirect('Dashboard');
    }

    public function deleteKategori($id)
    {
        $this->Dashboard_m->deleteKategori($id);
        $this->session->set_flashdata('message_kategori', '<div class="alert alert-danger" role="alert">Kategori Berhasil Dihapus</div>');
        redirect('Dashboard');
    }
    // END KATEGORI

    public function approveKonsultan()
    {
        $id = $this->input->post('id');
        // $nama = $this->input->post('nama');
        $this->db->update('user_consultan', ['status' => 1], ['id' => $id]);
        $this->session->set_flashdata('message_konsultan', '<div class="alert alert-danger" role="alert">User Diapprove</div>');
        redirect('Dashboard');
    }
}
