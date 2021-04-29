<?php
class film_model extends CI_model
{

	public function getAllFilm()
	{
		return $query = $this->db->get('film')->result_array();
	}

	public function tambahDataFilm()
	{
		$data = [
			
			"judul" => $this->input->post('judul', true),
			"durasi" => $this->input->post('durasi', true),
			"tahun" => $this->input->post('tahun', true),
            "sinopsis" => $this->input->post('sinopsis', true),

		];
		$this->db->insert('film',$data);
	}

	public function hapusDataFilm($idFilm)
	{

		$this->db->where('idFilm',$idFilm);
		$this->db->delete('film');
	}

	public function getFilmById($idFilm)
	{
		return $this->db->get_where('film',['idFilm' => $idFilm])->row_array();

	}

	public function ubahDataFilm()
	{
			$data = [
				"idFilm" => $this->input->post('idFilm', true),
                "judul" => $this->input->post('judul', true),
                "durasi" => $this->input->post('durasi', true),
                "tahun" => $this->input->post('tahun', true),
                "sinopsis" => $this->input->post('sinopsis', true),
				
			];
			$this->db->where('idFIlm',$this->input->post('idFilm'));
			$this->db->update('film',$data);
	}
}
