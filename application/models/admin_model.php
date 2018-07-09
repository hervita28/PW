<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
public function __construct()
{
	parent::__construct();
}
	
public function cek_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
							->where('password', $password)
							->get('admin');

		if($query->num_rows() > 0){
			$data = array(
					'username' => $username,
					'logged_in' => TRUE
				);
			$this->session->set_userdata($data);

			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function select_where($table,$where)
	{
		$query = $this->db->select('*')
						->from($table)
						->where($where)
						->get();
		return $query->result_array();
	}

}

/* End of file admin-model.php */
/* Location: ./application/models/admin-model.php */