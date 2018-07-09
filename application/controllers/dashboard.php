<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('hasil');
		//Do your magic here
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$this->load->view('blank');
		}else{
			$this->load->view('login1');
		}
		
	}

	function cek()
	{
		$waktu = time('YYYY-mm-dd') ;
		if($data['pelaksanaan'] == $waktu) {
			echo "web bisa dibuka!" ;
		} else { echo "Tidak bisa dibuka!";}
	}

	public function simpan()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'trim|required');
			$this->form_validation->set_rules('1a', 'Character', 'trim|required');
			$this->form_validation->set_rules('1b', 'Character', 'trim|required');
			$this->form_validation->set_rules('1c', 'Character', 'trim|required');
			$this->form_validation->set_rules('2a', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2b', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2c', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2d', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2e', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2f', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2g', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2h', 'Competence', 'trim|required');
			$this->form_validation->set_rules('2i', 'Competence', 'trim|required');
			$this->form_validation->set_rules('3a', 'Collaboration', 'trim|required');
			$this->form_validation->set_rules('3b', 'Collaboration', 'trim|required');
			$this->form_validation->set_rules('3c', 'Collaboration', 'trim|required');
			$this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');
			if ($this->form_validation->run() == TRUE) {

				if ($this->hasil->insert() == TRUE) {
					$data['notif'] = 'Data berhasil ditambah!';
					$this->load->view('blank', $data);
				}else{
					$data['notif'] = 'Data gagal ditambah!';
					$this->load->view('blank', $data);
				}

			} else {
				$data['notif'] = validation_errors();
				$this->load->view('blank', $data);
			}
		} else{
			$this->load->view('blank');
		}
	}

	public function data()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['penilaian'] = $this->hasil->selectAll();
			$this->load->view('dataview',$data);
		}else{
			$this->load->view('login1');
		}
	}

	public function detail()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$nik=$this->uri->segment(3);
			$data['penilaian'] = $this->hasil->get_data_nilai($nik);
			$this->load->view('detail_view',$data);
		}else{
			$this->load->view('login1');
		}
	}

}

/* End of file dash.php */
/* Location: ./application/controllers/dash.php */