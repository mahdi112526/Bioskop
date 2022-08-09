<?php  

Class Tayang_model extends CI_Model
{
	public function AllTayang()
	{
		return $this->db->get('Tayang')->result_array();
		return $this->db->get('Lokasi')->result_array();

	}

}

?>