<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanya extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function input()
    {
        $data = [
            'user_id' => $this->session->userdata('id_user'),
            'kategori' => $this->input->post('kategori'),
            'username' => $this->input->post('username'),
            'pertanyaan' => $this->input->post('pertanyaan'),
            'tgl_pertanyaan' => date("Y-m-d"),
        ];
        $this->db->insert('tanya', $data);
        redirect('home');
    }
}
