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
        $this->load->view('Auth/v_login', $data);
    }

    public function process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_m->login($username);
        if ($user->num_rows() > 0) {
            $row = $user->row_array();
            if (password_verify($password, $row['password'])) {
                $params = [
                    'id_user' => $row['id_user'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'profesi' => $row['profesi'],
                    'no_wa' => $row['no_wa'],
                    'user_level' => $row['user_level'],
                ];
                $this->session->set_userdata($params);
                echo "<script>window.location='" . base_url('home') . "'</script>";
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">User tidak ditemukan</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $params = [
            'id_user', 'username', 'email', 'profesi', 'no_wa'
        ];
        $this->session->unset_userdata($params);
        redirect('Auth');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username sudah tersedia!',
            'required' => 'Username wajib diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah tersedia!',
            'required' => 'email wajib diisi'
        ]);
        $this->form_validation->set_rules('profesi', 'Profesi', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[re-password]',  [
            'matches' => 'Password tidak sesuai',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('re-password', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/v_registrasi');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'profesi' => htmlspecialchars($this->input->post('profesi', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'no_wa' => htmlspecialchars($this->input->post('no_wa', true)),
                'user_level' => 3,
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Selamat! Akun anda berhasil dibuat</div>');
            redirect('Auth');
        }
    }
}
