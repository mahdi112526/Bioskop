<?php 

Class Film_model extends CI_Model
{
	public function AllFilm()
	{
		return $this->db->get('Film')->result_array();

	}

	public function tambahfilm()
	{

		// inisial kode film 
		$kata = $this->input->post('judul_film');
		$posisi =  strpos($kata," ");
		$panjang = strlen($kata);

		$katakonsonan = str_replace('A','',strtoupper($kata));
		$katakonsonan = str_replace('I','',strtoupper($katakonsonan));
		$katakonsonan = str_replace('U','',strtoupper($katakonsonan));
		$katakonsonan = str_replace('E','',strtoupper($katakonsonan));
		$katakonsonan = str_replace('O','',strtoupper($katakonsonan));

		$panjangkonsonan = strlen($katakonsonan);

		for($i=0;$i<$panjangkonsonan;$i++){
			$pos_space = strpos($katakonsonan,' ',$i);
		    if ($pos_space > $pos_space_old){
		    	$jml_kata++;
		        $akhir = $pos_space;        
		    }
		    $pos_space_old = $pos_space; 
		}
		$jml_kata++;

		if ($panjangkonsonan == 2){
			$judul = substr($katakonsonan,0,2);
		}
		elseif($panjang < 3){
			$judul = substr($kata,0,2);
		}
		elseif ($jml_kata >= 2){
			$judul = substr($katakonsonan,0,1);
		    $judul .= substr($katakonsonan,$akhir+1,1);
		}
		else{
		  $judul = substr($kata,0,1);
		  $judul .= substr($kata,$posisi+1,1);
		}

		// urutan film
		$query = $this->db->query("select count(kd_film) as qty from film");
		$row = $query->row();
		if (isset($row)){
			$urut = $row->qty;
		}

		$panjangurut = strlen($urut);
		if ($panjangurut < 3){
			for ($i=0;$i < (3-$panjangurut);$i++){
		    	$urutan .= "0";
		    }
		}

		$urutan .= ($urut+1);


		$kd_film = strtoupper($judul) .  $urutan;

		$data = [
				"kd_film" => $kd_film,
				"judul_film" => $this->input->post('judul_film',true),
				"tgl_launch" => $this->input->post('tgl_launc'),
				"synopsis" => $this->input->post('sinopsis')
		];

		$this->db->insert('Film',$data);
		redirect('Film');
	}
}

?>