<?php  
	class Tayang extends CI_Controller{

		public function index($nama = '')
		{
			 $data['judul'] = 'Tayang';
			 $this->load->model('Tayang_model');
			 $data['Tayang'] = $this->Tayang_model->AllTayang(); 
			 $data['bioskop_ls'] = $this->Tayang_model->AllTayang(); 
 			 $this->load->view('template/header',$data);
			 $this->load->view('Tayang/index',$data);
			 $this->load->view('template/footer');
		}

		public function tambah()
		{
				$data['judul'] = 'Tambah Jadwal Tayang';
				$this->load->model('Tayang_model');
				$data['Tayang'] = $this->Tayang_model->AllTayang(); 
				$data['Lokasi'] = $this->Tayang_model->AllTayang(); 
				$this->load->view('template/header',$data);
				$this->load->view('Tayang/tambah',$data);
				$this->load->view('template/footer');

				// if ($this->input->post('nama_bioskop') <> "" && $this->input->post('kode_bioskop') <> ""){
				// 	$this->load->model('Lokasi_model');
				// 	$this->Lokasi_model->TambahLokasi();
				// }
	
		}

	}
?>