<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jawab extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jawab_m');
    }

    public function index($id)
    {
        $data['tanya'] = $this->jawab_m->show($id);
        $this->template->load('template', 'Jawab/v_inputJawab', $data);
    }

    public function showJawab()
    {
        $id_tanya = $this->input->get('id_tanya');
        $data = $this->jawab_m->showJawab($id_tanya);
        echo json_encode($data);
    }

    public function hapusjawab()
    {
        $id_jawab = $this->input->post('id');
        $data = $this->jawab_m->deleteJawab($id_jawab);
        echo json_encode($data);
    }

    public function likeJawab()
    {
        $user = $this->session->userdata('username');
        $post = $this->input->post();
        if (isset($post['action'])) {
            $id = $post['id'];
            $action = $post['action'];

            if ($action == 'apreciate') :
                // Cek user yang like
                $apreciates_query = "SELECT * FROM rating_jawab WHERE username = '$user' && id_jawab = $id";
                $cekusertlike = $this->db->query($apreciates_query)->num_rows();

                //Jika user pernah like
                if ($cekusertlike) {
                    $sql = "DELETE FROM rating_jawab WHERE id_jawab = $id && username = '$user'";
                    $this->db->query($sql);
                    $this->db->query("UPDATE jawab SET rating = rating - 1 WHERE id_jawab = $id");
                    //Jika user tidak me-like.
                } else {
                    $sql = "INSERT INTO rating_jawab (id_jawab, username) VALUES ($id, '$user')";
                    $this->db->query($sql);
                    $this->db->query("UPDATE jawab SET rating = rating + 1 WHERE id_jawab = $id");
                }
            endif;
            echo json_encode($cekusertlike);
        }
    }


    public function input()
    {

        if ($this->input->post('type') == 1) {

            $nama_nanya = $this->input->post('nama_nanya');
            $kategori = $this->input->post('kategori');
            $pertanyaan = $this->input->post('pertanyaan');
            $id_tanya = $this->input->post('id_tanya');
            $username = $this->input->post('username');
            $jawaban = $this->input->post('jawaban');

            $jawaban = [

                'nama_nanya' => $nama_nanya,
                'kategori' => $kategori,
                'id_tanya' => $id_tanya,
                'pertanyaan' => $pertanyaan,
                'nama_jawab' => $username,
                'jawaban' => $jawaban,
                'rating' => "0",
                'tgl_jawab' => date("Y-m-d")
            ];

            $data = $this->jawab_m->input($jawaban);
            echo json_encode($data);
        }
    }
}
