<?php  
// print_r($_POST);

Class Tayang_model extends CI_Model
{
	public function AllTayang()
	{
		$query = $this->db->query("SELECT * FROM bioskop_ls");
		return $query->result();

	}

	public function TayangFilm()
	{
		$query = $this->db->query("select * from film");
		return $query->result();
	}

	public function TambahTayang()
	{
		$kd_bioskop = $this->input->post('lokasi');
		$kd_film = $this->input->post('film');
		$tanggal = $this->input->post('tanggal');
		$tanggal1 = date_create($tanggal);
		$tanggal = date_format($tanggal1,'Ymd');
		$tanggl_ori = date_format('Y-m-d');
		$jam = $this->input->post('jam');
		$jam1 = str_replace(':','',$jam);
		$jml_kursi = $this->input->post('jml_kursi');
		$judul_film = $this->input->post('judul_film');

		$query = $this->db->query("select count(kd_tayang) as qty from tayang");
		$row = $query->row();

		if (isset($row)){
			$qty = $row->qty;
		}

		$qty++;

		$$panjang = strlen($a);

		for ($i=0;$i < (5 - $panjang);$i++){
			$c .= "0";
		}

		$kd_tayang = $kd_bioskop . $tanggal . $jam . $kd_film . $c . $qty;

		if ($kd_bioskop <> "" && $kd_film <> "" && $tanggal <> "" && $jam <> "" && $jml_kursi <> ""){
			$data = [
				"kd_tayang " => $kd_tayang,
				"judul_film" => $judul_film, 
				"kd_film" => $kd_film,
				"tanggal" => $tanggal_ori,
				"jam" => $jam,
				"jumlah_kursi" => $jml_kursi
				 ];

			$this->db->insert('tayang',$data);
			redirect('tayang');
		}
	}

}

?>