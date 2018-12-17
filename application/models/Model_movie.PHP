<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_movie extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
  

	function get_popular(){ 
		$content = file_get_contents($this->config->item('apiurl').'movie/popular?api_key='.$this->config->item('apikey').'&language=en-US&page=1');
		$result  = json_decode($content);
		$data= '';
		foreach($result->results as $film)  //looping membaca isi respons 
			    {
			    	$data .= '<div class="row"> <div class="col-sm-6">';
					$data .=  '<h2>'.$film->original_title.'</h2>';
					$data .=  '<p>'.$film->overview.'</p>';            
					$data .=  '<img src="http://image.tmdb.org/t/p/w185'.$film->poster_path.'" class="rounded" alt="Cinque Terre" width="304" height="236"></br> ' ;
					$data .=  '<a href="'.base_url().'index.php/movieapp/detail?idmovie='.$film->id.'" class="btn btn-info" role="button">Detail</a><button type="button" class="btn btn-warning">Share</button><br>';
					$data .=  '</div></div>';
			     }
		return $data;
	}

	function get_now_playing(){ 
		$content = file_get_contents($this->config->item('apiurl').'movie/now_playing?api_key='.$this->config->item('apikey').'&language=en-US&page=1');
		$result  = json_decode($content);
		$data= '';
		foreach($result->results as $film)  //looping membaca isi respons 
			    {
			    	$data .= '<div class="row"> <div class="col-sm-6">';
					$data .=  '<h2>'.$film->original_title.'</h2>';
					$data .=  '<p>'.$film->overview.'</p>';            
					$data .=  '<img src="http://image.tmdb.org/t/p/w185'.$film->poster_path.'" class="rounded" alt="Cinque Terre" width="304" height="236"></br> ' ;
					$data .=  '<a href="'.base_url().'index.php/movieapp/detail?idmovie='.$film->id.'" class="btn btn-info" role="button">Detail</a><button type="button" class="btn btn-warning">Share</button><br>';
					$data .=  '</div></div>';
			     }
		return $data;
	}

	function get_upcoming(){ 
		$content = file_get_contents($this->config->item('apiurl').'movie/upcoming?api_key='.$this->config->item('apikey').'&language=en-US&page=1');
		$result  = json_decode($content);
		$data= '';
		foreach($result->results as $film)  //looping membaca isi respons 
			    {
			    	$data .= '<div class="row"> <div class="col-sm-6">';
					$data .=  '<h2>'.$film->original_title.'</h2>';
					$data .=  '<p>'.$film->overview.'</p>';            
					$data .=  '<img src="http://image.tmdb.org/t/p/w185'.$film->poster_path.'" class="rounded" alt="Cinque Terre" width="304" height="236"></br> ' ;
					$data .=  '<a href="'.base_url().'index.php/movieapp/detail?idmovie='.$film->id.'" class="btn btn-info" role="button">Detail</a><button type="button" class="btn btn-warning">Share</button><br>';
					$data .=  '</div></div>';
			     }
		return $data;
	}


	function get_detail($movie_id){ 
		$content = file_get_contents($this->config->item('apiurl').'movie/'.$movie_id.'?api_key='.$this->config->item('apikey').'&language=en-US&page=1');
		$result  = json_decode($content);
		$data= '';
			    	$data .= '<div class="row"> <div class="col-sm-6">';
					$data .=  '<h2>'.$result->original_title.'</h2>';
					$data .=  '<p>'.$result->overview.'</p>';            
					$data .=  '<img src="http://image.tmdb.org/t/p/w185'.$result->poster_path.'" class="rounded" alt="Cinque Terre" width="304" height="236"></br> ' ;
					$data .=  '<button type="button" class="btn btn-danger" onclick="simpan('.$movie_id.')" >Favourite</button><br>';
					$data .=  '</div></div>';

		return $data;
	}
	function get_v_detail($movie_id){ 
		$content = file_get_contents($this->config->item('apiurl').'movie/'.$movie_id.'?api_key='.$this->config->item('apikey').'&language=en-US&page=1');
		$result  = json_decode($content);
		$data= '';
			    	$data .= '<div class="row"> <div class="col-sm-6">';
					$data .=  '<h2>'.$result->original_title.'</h2>';
					$data .=  '<p>'.$result->overview.'</p>';            
					$data .=  '<img src="http://image.tmdb.org/t/p/w185'.$result->poster_path.'" class="rounded" alt="Cinque Terre" width="304" height="236"></br> ' ;
					$data .=  '<button type="button" class="btn btn-danger" onclick="hapus('.$movie_id.')" >Remove Favourite</button><br>';
					$data .=  '</div></div>';

		return $data;
	}
}
