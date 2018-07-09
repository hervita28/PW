<?php
/**
* 
*/
class Auth extends CI_Controller
{
	
	function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if ($this->session->userdata('role') == "superadmin") {
				redirect(base_url('index.php/sadmin'));
			} elseif ($this->session->userdata('role') == "admin") {
				redirect(base_url('index.php/admin'));
			} else {
				redirect(base_url('index.php/user'));
			}
		}else{
			$this->load->view('login1');
		}
	}

	public function login()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->session->userdata('role') == "superadmin") {
				redirect(base_url('index.php/sadmin'));
			} elseif ($this->session->userdata('role') == "admin") {
				redirect(base_url('index.php/admin'));
			} else {
				redirect(base_url('index.php/user'));
			}
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data_login = array(
				'username' => $username,
				'password' => $password
				);
			$cek = $this->model_data->select_where('admin',$data_login);
			if (count($cek) > 0) {
				$data_session = array(
					'username' => $cek[0]['username'],
					'password' => $cek[0]['password'],
					'role' => $cek[0]['role'],
					'logged_in' => TRUE,
					);
				$this->session->set_userdata($data_session);
				if ($cek[0]['role'] == "admin") {
					redirect(base_url('index.php/admin'));
				} elseif ($cek[0]['role'] == "superadmin") {
					redirect(base_url('index.php/sadmin'));
				} else {
					redirect(base_url('index.php/user'));
				}
			} else {
				echo "data tidak ada";
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>