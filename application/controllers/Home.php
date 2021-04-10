<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}

	public function index()
	{
		$data['questions'] = $this->home_m->list_questions();
		foreach ($data['questions'] as $d) {
			$jumlahjawab = $d['id_tanya'];
		}
		$data['count_jab'] = $this->db->query("SELECT pertanyaan FROM jawab WHERE id_tanya = $jumlahjawab")->num_rows();

		$this->template->load('template', 'Home/v_home', $data);
	}

	public function delete($id)
	{
		$this->db->delete('tanya', ['id_tanya' => $id]);
		$this->db->delete('jawab', ['id_tanya' => $id]);
		redirect('home');
	}
}
