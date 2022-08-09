<?php  
	class Lokasi extends CI_Controller{

		public function index($nama = '')
		{
			 $data['judul'] = 'Lokasi';
			 $this->load->model('Lokasi_model');
			 $data['Lokasi'] = $this->Lokasi_model->AllLokasi(); 
 			 $this->load->view('template/header',$data);
			 $this->load->view('Lokasi/index',$data);
			 $this->load->view('template/footer');
		}

		public function tambah()
		{
				$data['judul'] = 'Tambah Lokasi Bioskop';
				$this->load->view('template/header',$data);
				$this->load->view('Lokasi/tambah',$data);
				$this->load->view('template/footer');

				if ($this->input->post('nama_bioskop') <> "" && $this->input->post('kode_bioskop') <> ""){
					$this->load->model('Lokasi_model');
					$this->Lokasi_model->TambahLokasi();
				}
	
		}

	}
?>