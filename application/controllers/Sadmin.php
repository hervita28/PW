<?php
/**
* 
*/
class Sadmin extends CI_Controller
{
	
	function index()
	{
		if ($this->session->userdata('logged_in') == true) {
			$data['pelaksanaan'] = $this->model_data->select('pelaksanaan');
			$this->load->view('sadmin/v_sadmin',$data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function data_karyawan()
	{
		if ($this->session->userdata('logged_in') == true) {
			$data['karyawan'] = $this->model_data->select('karyawan');
			$this->load->view('sadmin/v_data_karyawan',$data);
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function add_karyawan()
	{
		if ($this->session->userdata('logged_in') == true) {
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');

			$data_karyawan = array(
				'nik' => $nik,
				'nama' => $nama,
				'ban' => $keterangan
				);
			$add = $this->model_data->insert('karyawan',$data_karyawan);
			if ($add == true) {
				echo "<script>
				window.alert('Data Berhasil Ditambahkan')
				window.location.href='".base_url('index.php/sadmin/data_karyawan')."';
				</script>";
			} else {
				echo "<script>
				window.alert('Data Gagal Ditambahkan')
				window.location.href='".base_url('index.php/sadmin/data_karyawan')."';
				</script>";
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function edit_karyawan()
	{
		if ($this->session->userdata('logged_in') == true) {
			$id = $this->input->post('id');
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');

			$where_karyawan = array('id' => $id);
			$data_karyawan = array(
				'nik' => $nik,
				'nama' => $nama,
				'ban' => $keterangan
				);
			$update = $this->model_data->update('karyawan',$data_karyawan,$where_karyawan);
			if ($update == true) {
				echo "<script>
				window.alert('Data Berhasil Diubah')
				window.location.href='".base_url('index.php/sadmin/data_karyawan')."';
				</script>";
			} else {
				echo "<script>
				window.alert('Data Gagal Diubah')
				window.location.href='".base_url('index.php/sadmin/data_karyawan')."';
				</script>";
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function hapus_karyawan()
	{
		if ($this->session->userdata('logged_in') == true) {
			$id = $this->input->post('id');
			$where_karyawan = array('id' => $id);
			$hapus = $this->model_data->delete('karyawan',$where_karyawan);
			if ($hapus == true) {
				echo "<script>
				window.alert('Data Berhasil Dihapus')
				window.location.href='".base_url('index.php/sadmin/data_karyawan')."';
				</script>";
			} else {
				echo "<script>
				window.alert('Data Gagal Dihapus')
				window.location.href='".base_url('index.php/sadmin/data_karyawan')."';
				</script>";
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function pelaksanaan()
	{
		if ($this->session->userdata('logged_in') == true) {
			$job = $this->input->post('job');
			$pelaksanaan = $this->input->post('pelaksanaan');
			
			$data_pelaksanaan = array(
				'tanggal' => $pelaksanaan,
				'job' => $job,
				'status' => 'non aktif'
				);
			$add_pelaksanaan = $this->model_data->insert('pelaksanaan',$data_pelaksanaan);
			if ($add_pelaksanaan == true) {
				echo "<script>
				window.alert('Jadwal Pelaksanaan Berhasil Ditambahkan')
				window.location.href='".base_url('index.php/sadmin')."';
				</script>";
			} else {
				echo "<script>
				window.alert('Jadwal Pelaksanaan Gagal Ditambahkan')
				window.location.href='".base_url('index.php/sadmin')."';
				</script>";
			}
		} else {
			redirect(base_url('index.php/auth'));
		}
	}

	public function aktivasi()
	{
		if ($this->session->userdata('logged_in') == true) {
			$tanggal_sekarang = date('Y-m-d');
			$id = $this->input->get('id');
			$status = $this->input->get('status');
			$where_pelaksanaan = array('id' => $id);
			if ($status == "aktif") {
				$data_pelaksanaan = array('status' => 'aktif');
			} else {
				$data_pelaksanaan = array('status' => 'non aktif');
			}

			$query = "UPDATE `pelaksanaan` SET `status`='non aktif' WHERE `tanggal` != '$tanggal_sekarang'";
			$query = $this->model_data->query($query);
			$update_pelaksanaan = $this->model_data->update('pelaksanaan',$data_pelaksanaan,$where_pelaksanaan);
			redirect(base_url('index.php/sadmin'));
		} else {
			redirect(base_url('index.php/auth'));
		}
	}
}
?>