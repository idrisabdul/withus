<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }

    public function index()
    {
        $data['title'] = "WithUs Login";
        $this->load->view('auth/v_login', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $user = $this->user_m->login($post);
            if ($user->num_rows() > 0) {
                $row = $user->row_array();
                $params = [
                    'id_user' => $row['id_user'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'profesi' => $row['profesi'],
                    'no_wa' => $row['no_wa'],
                ];
                $this->session->set_userdata($params);
                echo "<script>window.location='" . base_url('home') . "'</script>";
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">User tidak ditemukan</div>');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $params = [
            'id_user', 'username', 'email', 'profesi', 'no_wa'
        ];
        $this->session->unset_userdata($params);
        redirect('auth');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username sudah tersedia!',
            'required' => 'Username wajib diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.username]', [
            'is_unique' => 'Email sudah tersedia!',
            'required' => 'email wajib diisi'
        ]);
        $this->form_validation->set_rules('profesi', 'Profesi', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[re-password]',  [
            'matches' => 'Password tidak sesuai',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('re-password', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'auth/v_registrasi');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'profesi' => htmlspecialchars($this->input->post('profesi', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'no_wa' => htmlspecialchars($this->input->post('no_wa', true)),
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Selamat! Akun anda berhasil dibuat</div>');
            redirect('auth');
        }
    }
}
