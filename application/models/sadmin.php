<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sadmin extends CI_Model {
public function insert()
	{
		$data = array(
				//nama kolom		//nama form input
				'jobtarget'	=> $this->input->post('job'),
				'pelaksanaan'	=> $this->input->post('pelaksanaan'),
			);

	//proses insert data
		$this->db->insert('sadmin',$data);

		//cek keberhasilan insert data
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file sadmin.php */
/* Location: ./application/models/sadmin.php */