<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$tanggal_sekarang = date('Y-m-d');
			$query = "SELECT * FROM `pelaksanaan` WHERE `tanggal`='$tanggal_sekarang' AND `status`='aktif'";
			$aktivasi = $this->model_data->query2($query);
			if (count($aktivasi)>0) {
				$data['karyawan'] = "";
				$data['job'] = $aktivasi[0]['job'];
				$this->load->view('admin/v_admin',$data);
			} else {
				echo "<script>
				window.alert('Website belum aktif, silahkan menghubungi admin untuk mengaktifkan!')
				window.location.href='".base_url('index.php/auth/logout')."';
				</script>";
			}
		}else{
			redirect(base_url('index.php/auth'));
		}
	}

	public function simpan_nilai()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$ban = $this->input->post('ban');
			$satuA = $this->input->post('1a');
			$satuB = $this->input->post('1b');
			$satuC = $this->input->post('1c');
			$duaA = $this->input->post('2a');
			$duaB = $this->input->post('2b');
			$duaC = $this->input->post('2c');
			$duaD = $this->input->post('2d');
			$duaE = $this->input->post('2e');
			$duaF = $this->input->post('2f');
			$duaG = $this->input->post('2g');
			$duaH = $this->input->post('2h');
			$duaI = $this->input->post('2i');
			$tigaA = $this->input->post('3a');
			$tigaB = $this->input->post('3b');
			$tigaC = $this->input->post('3c');
			$kesimpulan = $this->input->post('kesimpulan');
			$catatan = $this->input->post('catatan');

			if ($satuA == 'None') {
				echo "<script>
				window.alert('Kolom INTERGRITY harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($satuB == 'None') {
				echo "<script>
				window.alert('Kolom ENTHUSIASM harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($satuC == 'None') {
				echo "<script>
				window.alert('Kolom TOTALITY harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaA == 'None') {
				echo "<script>
				window.alert('Kolom DECISION MAKING harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaB == 'None') {
				echo "<script>
				window.alert('Kolom ACTION MANAGEMENT harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaC == 'None') {
				echo "<script>
				window.alert('Kolom LEADERSHIP OF CHANGE harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaD == 'None') {
				echo "<script>
				window.alert('Kolom BUSINESS ACUMEN harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaE == 'None') {
				echo "<script>
				window.alert('Kolom DEVELOPING GREAT LEADER harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaF == 'None') {
				echo "<script>
				window.alert('Kolom VISIONARY THINKING harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaG == 'None') {
				echo "<script>
				window.alert('Kolom ADAPTABILITY harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaH == 'None') {
				echo "<script>
				window.alert('Kolom LEADERSHIP OF ENDURANCE harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($duaI == 'None') {
				echo "<script>
				window.alert('Kolom ORGANIZATIONAL AWARENESS harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($tigaA == 'None') {
				echo "<script>
				window.alert('Kolom TEAM WORK harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($tigaB == 'None') {
				echo "<script>
				window.alert('Kolom BUILDING PARTNERSHIP harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($tigaC == 'None') {
				echo "<script>
				window.alert('Kolom NETWORKING harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($kesimpulan == null) {
				echo "<script>
				window.alert('Opsi KESIMPULAN harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} elseif ($catatan == "") {
				echo "<script>
				window.alert('CATATAN harus di isi!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
			} else {
				$data_nilai = array(
				'nik' => $nik,
				'nama' => $nama,
				'band' => $ban,
				'satua' => $satuA,
				'satub' => $satuB,
				'satuc' => $satuC,
				'duaa' => $duaA,
				'duab' => $duaB,
				'duac' => $duaC,
				'duad' => $duaD,
				'duae' => $duaE,
				'duaf' => $duaF,
				'duag' => $duaG,
				'duah' => $duaH,
				'duai' => $duaI,
				'tigaa' => $tigaA,
				'tigab' => $tigaB,
				'tigac' => $tigaC,
				'kesimpulan' => $kesimpulan,
				'catatan' => $catatan,
				);
				$add_nilai = $this->model_data->insert('penilaian',$data_nilai);
				if ($add_nilai == TRUE) {
					echo "<script>
				window.alert('PENILAIAN berhasil!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
				} else {
					echo "<script>
				window.alert('PENILAIAN gagal!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";
				}
			}
		}else{
			redirect(base_url('index.php/auth'));
		}
	}

	public function cari_peserta()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$nik = $this->input->post('nik');
			$data_peserta = array('nik' => $nik);
			$cari_peserta = $this->model_data->select_where('karyawan',$data_peserta);

			$tanggal_sekarang = date('Y-m-d');
			$query = "SELECT * FROM `pelaksanaan` WHERE `tanggal`='$tanggal_sekarang' AND `status`='aktif'";
			$aktivasi = $this->model_data->query2($query);
			if (count($cari_peserta) > 0) {
				$data['karyawan'] = $cari_peserta;
				$data['job'] = $aktivasi[0]['job'];
				$this->load->view('admin/v_admin',$data);
			} else {
				echo "<script>
				window.alert('Data Karyawan Tidak Ditemukan, Silahkan Hubungi Admin!')
				window.location.href='".base_url('index.php/admin')."';
				</script>";	
			}
		} else {
			redirect(base_url('index.php/admin'));
		}
	}

	public function super()
	{
		$this->load->view('sadmin');
	}

	function submit()
	{
		if($this->input->post('submit')){


			$this->form_validation->set_rules('job','Job','trim|required');
			$this->form_validation->set_rules('pelaksanaan','Pelaksanaan','trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->sadmin->insert() == TRUE) {
					$data['notif'] = 'Data berhasil ditambah!';
					$this->load->view('sadmin', $data);
				}else{
					$data['notif'] = 'Data gagal ditambah!';
					$this->load->view('sadmin', $data);
				}

			} else {
				$data['notif'] = validation_errors();
				$this->load->view('sadmin', $data);
			}
		}else{
			$this->load->view('sadmin');
		}
	}

	public function data_karyawan()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->load->view('karyawan');
		} else {
			redirect(base_url('index.php/admin'));
		}
	}


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */