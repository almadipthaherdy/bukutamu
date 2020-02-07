<?php

class m_crud extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_bukutamu');
	}
}