<?php  
	class Film extends CI_Controller{

		public function index($nama = '')
		{
			 $data['judul'] = 'Film';
			 $this->load->model('Film_model');
			 $data['Film'] = $this->Film_model->AllFilm(); 
 			 $this->load->view('template/header',$data);
			 $this->load->view('Film/index',$data);
			 $this->load->view('template/footer');
		}
	}
?>