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

		public function tambah()
		{
				$data['judul'] = 'Tambah Film';
				$this->load->view('template/header',$data);
				$this->load->view('Film/tambah',$data);
				$this->load->view('template/footer');

				if ($this->input->post('judul_film') <> "" && $this->input->post('tgl_launc') <> ""){
					$this->load->model('Film_model');
					$this->Film_model->tambahfilm();
				}
	
		}

	}
?>