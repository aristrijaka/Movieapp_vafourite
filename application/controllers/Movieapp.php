<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movieapp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('model_movie');
		$this->load->database();
		
	}
	public function index()
	{
		$data = array(
		    'hasil' => $this->model_movie->get_popular()
		);	
		$this->load->view('home',$data);
	}

	public function now_playing()
	{
		$data = array(
		    'hasil' => $this->model_movie->get_now_playing()
		);	
		$this->load->view('now_playing',$data);
	}
	public function upcoming()
	{
		$data = array(
		    'hasil' => $this->model_movie->get_upcoming()
		);	
		$this->load->view('upcoming',$data);
	}

	public function detail()
	{
		$idmovie= $this->input->get('idmovie');
		$data = array(
		    'hasil' => $this->model_movie->get_detail($idmovie)
		);	
		$this->load->view('detail',$data);
	}
	
	public function favourite()
	{ 
		$query = $this->db->get('vafourite');
		$fav_movie= '';
		foreach ($query->result() as $row)
		{
			$idmovie = $row->id_movie;
		    $fav_movie .= $this->model_movie->get_v_detail($idmovie);
		}

		$data = array(
		    'hasil' =>  $fav_movie
		);	
		$this->load->view('vafourite',$data);
	}

	public function simpan_favourite()
	{
		$idmovie= $this->input->get('idmovie');

		$data = array(
		        'id_movie' => $idmovie, 
		);

		$query = $this->db->query('SELECT * FROM vafourite where id_movie ='.$idmovie);
		if ($query->num_rows() < 1){
			$this->db->insert('vafourite', $data);
		}
		echo ($this->db->affected_rows() != 1) ? false : true;
	}
	public function delete_favourite()
	{
		$idmovie= $this->input->get('idmovie');

		$data = array(
		        'id_movie' => $idmovie, 
		);

		$query = $this->db->query('SELECT * FROM vafourite where id_movie ='.$idmovie);

		if ($query->num_rows() > 0){ 
			$this->db->delete('vafourite', $data);
			echo ($this->db->affected_rows() != 1) ? false : true;
		}else{
			echo 'false';
		}
		
	}
}
