<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Model {
	public function insert()
	{
		$data = array(
				//nama kolom		//nama form input
				'nik'	=> $this->input->post('nik'),
				'nama'			=> $this->input->post('nama'),
				'satua'		=> $this->input->post('1a'),
				'satub'		=> $this->input->post('1b'),
				'satuc'		=> $this->input->post('1c'),
				'duaa'		=> $this->input->post('2a'),
				'duab'		=> $this->input->post('2b'),
				'duac'		=> $this->input->post('2c'),
				'duad'		=> $this->input->post('2d'),
				'duae'		=> $this->input->post('2e'),
				'duaf'		=> $this->input->post('2f'),
				'duag'		=> $this->input->post('2g'),
				'duah'		=> $this->input->post('2h'),
				'duai'		=> $this->input->post('2i'),
				'tigaa'		=> $this->input->post('3a'),
				'tigab'		=> $this->input->post('3b'),
				'tigac'		=> $this->input->post('3c'),
				'kesimpulan'		=> $this->input->post('kesimpulan'),
				'catatan'		=> $this->input->post('catatan')

			);

		//proses insert data
		$this->db->insert('penilaian',$data);

		//cek keberhasilan insert data
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function selectAll(){
    return $this->db->get('penilaian')
    				->result();
   	}

   public function get_data_nilai($nik)
   {
   	return $this->db->where('nik',$nik)
   					->get('penilaian')->row();
   }
}

/* End of file hasil.php */
/* Location: ./application/models/hasil.php */