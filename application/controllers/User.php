<?php
/**
* 
*/
class User extends CI_Controller
{
	
	function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['karyawan'] = $this->model_data->select('penilaian');
			$this->load->view('user/v_user',$data);
		}else{
			redirect(base_url('index.php/auth'));
		}
	}

	public function detail()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$nik = $this->input->get('nik');
			$id = $this->input->get('id');
			$where_detail = array('nik' => $nik, 'id' => $id);
			$detail_nilai = $this->model_data->select_where('penilaian',$where_detail);
			if (count($detail_nilai) > 0) {
				$data['detail'] = $detail_nilai;
				$this->load->view('user/v_detail_nilai',$data);
			} else {
				echo "<script>
				window.alert('Data Not Found!')
				window.location.href='".base_url('index.php/user')."';
				</script>";
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}
}
?>