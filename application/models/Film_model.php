<?php 

Class Film_model extends CI_Model
{
	public function AllFilm()
	{
		return $this->db->get('Film')->result_array();

	}
}

?>