<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}

	// public function index_()
	// {
	// 	$data['questions'] = $this->home_m->list_questions();
	// 	foreach ($data['questions'] as $d) {
	// 		$jumlahjawab = $d['id_tanya'];
	// 	}
	// 	$data['count_jab'] = $this->db->query("SELECT pertanyaan FROM jawab WHERE id_tanya = $jumlahjawab")->num_rows();

	// 	//Show Kategori
	// 	$query = "SELECT * FROM kategori";
	// 	$data['kategori'] = $this->db->query($query)->result_array();

	// 	echo "<pre>";
	// 	echo var_dump($data['kategori']);
	// 	echo "</pre>";

	// 	// $this->template->load('template', 'Home/v_home', $data);
	// }

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('tanya', ['id_tanya' => $id]);
		$this->db->delete('jawab', ['id_tanya' => $id]);
		redirect('Home');
	}

	function index()
	{
		//Show Kategori
		$query = "SELECT * FROM kategori";
		$data['kategori'] = $this->db->query($query)->result_array();

		$this->template->load('template', 'Home/v_home', $data);
	}

	function getKategori()
	{
		$id = $this->input->post('id');
		$query = "SELECT id FROM kategori WHERE id = '$id'";
		$data = $this->db->query($query)->result_array();
		foreach ($data as $d) {
			echo json_encode($d['id']);
		}
	}

	function fetch()
	{
		$output = '';
		$data = $this->home_m->fetch_data($this->input->post('limit'), $this->input->post('start'));
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$user_id = $row->user_id;
				if ($user_id == ucfirst($this->session->userdata('id_user'))) {
					$output .= '
					<div class="item ' . $row->id . '">
					<div class="card-header">
						<h5>' . ucfirst($row->username) . '</h5>
						<span>' . $row->tgl_pertanyaan . '</span>
						<div class="card-header-right">
					    	<div class="row ">
								<h5 id="' . $row->nm_kategori . '">' . ucfirst($row->nm_kategori) . '</h5>
								<ul class=" mx-3 list-unstyled card-option">
									<li>
                                        <i class="fa fa fa-wrench open-card-option"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-window-maximize full-card"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-minus minimize-card"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-refresh reload-card"></i>
                                    </li>
								</ul>
                            </div>
                        </div>
                    </div>
					<div class="card-block">
						<p>
                            ' . $row->pertanyaan . '
                        </p>
						<div class="text-right">
							<div class="pull-left mt-1">
								<i class="fa fa-comment mr-2"></i>
				' . $this->db->query("SELECT pertanyaan FROM jawab WHERE id_tanya = $row->id_tanya")->num_rows() . '
						</div>
						<div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="">
							<button data-id=' . $row->id_tanya . ' id="delete" data-toggle="modal" data-target="#delete_tanya" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
						</div>
						' . anchor('jawab/index/' . $row->id_tanya, '<button href="#" name="id" id="jawab" class="btn btn-sm btn-outline-primary text-right f-w-600">Beri Jawaban</button>') . '
					</div>
				</div>
				</div>
				';
				} else {
					$output .= '
					<div class="item ' . $row->id . '">
					<div class="card-header">
						<h5>' . ucfirst($row->username) . '</h5>
						<span>' . $row->tgl_pertanyaan . '</span>
						<div class="card-header-right">
					    	<div class="row">
								<h5 id="' . $row->nm_kategori . '">' . ucfirst($row->nm_kategori) . '</h5>
								<ul class=" mx-3 list-unstyled card-option">
									<li>
                                        <i class="fa fa fa-wrench open-card-option"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-window-maximize full-card"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-minus minimize-card"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-refresh reload-card"></i>
                                    </li>
								</ul>
                            </div>
                        </div>
                    </div>
					<div class="card-block">
						<p>
                            ' . $row->pertanyaan . '
                        </p>
						<div class="text-right">
							<div class="pull-left mt-1">
								<i class="fa fa-comment mr-2"></i>
				' . $this->db->query("SELECT pertanyaan FROM jawab WHERE id_tanya = $row->id_tanya")->num_rows() . '
						</div>
						<div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="">
						</div>
						' . anchor('jawab/index/' . $row->id_tanya, '<button href="#" name="id" id="jawab" class="btn btn-sm btn-outline-primary text-right f-w-600">Beri Jawaban</button>') . '
					</div>
				</div>
				</div>
				';
				}
			}
		}
		echo $output;
	}
}
