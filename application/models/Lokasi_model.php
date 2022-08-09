<?php  

	Class Lokasi_model extends CI_Model
	{
		public function AllLokasi()
		{
			return $this->db->get('bioskop_ls')->result_array();

		}

		public function TambahLokasi()
		{	

			$kd_bioskop = $this->input->post('kode_bioskop');
			$nama_bioskop = $this->input->post('nama_bioskop');
			$alamat_bioskop = $this->input->post('alamat');
			$kota = $this->input->post('kota');

			// cek kode unik bioskop
			$kd_bioskop = strtoupper(substr($kd_bioskop,0,3));

			$query = $this->db->query("select kd_bioskop from bioskop_ls where kd_bioskop = '$kd_bioskop' ");
			$row = $query->row();

			if (isset($row)){
				$kd_bioskop_cek = $row->kd_bioskop;
			}

			if ($kd_bioskop_cek <> ""){
				redirect('lokasi/tambah');
			}

			$data = [
				"kd_bioskop" => $kd_bioskop,
				"nama_bioskop" => $nama_bioskop,
				"alamat_bioskop" => $alamat_bioskop,
				"kota" => $kota
			];


			$this->db->insert('bioskop_ls',$data);
			redirect('lokasi');


		}

	}


?>