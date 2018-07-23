<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_instagram extends CI_model{

	//fungsi check login
	public function check_login($where)
	{
		$this->db->select('*');
		$this->db->from("tbl_user");
		$this->db->where($where);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
	}

	//fungsi memasukkan data register
	public function save_register($insert)
	{
		$query = $this->db->insert("tbl_user", $insert);
		
		if($query){
			return true;
		}else{
			return false;
		}
	}

}