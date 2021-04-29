<?php
class DetailFilm extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('film_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Judul Film';
		$data['film'] = $this->film_model->getAllFilm();
		if ($this->input->post('card film')) {
			$data['film'] = $this->film_model->getFilmById($idFIlm);
		}
		$this->load->view('templates/header2', $data);
		$this->load->view('detailFilm/index', $data);
	}
