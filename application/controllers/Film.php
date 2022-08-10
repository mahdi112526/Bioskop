<?php  

	class Film extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('Film_model');
		}

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

		public function detail()
		{
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$data['kd_film'] = $this->Film_model->detailfilm($id);
			

			$data['judul'] = 'Detail Film';
			$this->load->view('template/header',$data);
			$this->load->view('Film/detail',$data);
			$this->load->view('template/footer');
			}
		}

	}
?>