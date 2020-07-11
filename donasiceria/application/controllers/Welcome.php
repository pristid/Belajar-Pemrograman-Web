<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('index');
	}

	public function login(){
		$this->load->view('login');
	}

	public function proses_daftar()
	{
		$this->load->model('mymodel');
		$data = array (
			'no_id' => $this->input->post('no_id'),
			'nama' => $this->input->post('nama'),
			'kota' => $this->input->post('kota'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'kode_pos' => $this->input->post('kode_pos'),
			'no_telp' => $this->input->post('no_telp'),
			'role_id' => "2"
		);
		$query = $this->mymodel->Insert('donatur', $data);
		if ($query)
		{
			echo "<script>alert('Pendaftaran Sukses!')</script>";
			$this->index();
		}
		else{
			echo "<script>alert('Pendaftaran Gagal!')</script>";
			$this->index();
		}
	}
	
	public function proses_login()
	{
		$this->load->model('mymodel');
		$where = array (
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$cek = $this->mymodel->GetWhere('donatur', $where);
		$role = $cek[0]['role_id'];
		if($role == 2){
			$count_cek = count($cek);
			if ($count_cek > 0){
				$donatur = $this->mymodel->GetWhere('donatur', array('email' => $this->input->post('email')));
				$data_session = array (
					'no_id' => $donatur[0]['no_id'],
					'nama' => $donatur[0]['nama'],
				);
				$this->session->set_userdata($data_session);
				echo "<script>alert('Login Berhasil!')</script>";
				redirect(base_url('index.php/donatur'));
			}
			else{	
				echo "<script>alert('Login Gagal!')</script>";
				$this->index();
			}
		} else {
			$count_cek = count($cek);
			if ($count_cek > 0){
				$donatur = $this->mymodel->GetWhere('donatur', array('email' => $this->input->post('email')));
				$data_session = array (
					'no_id' => $donatur[0]['no_id'],
					'nama' => $donatur[0]['nama'],
				);
				$this->session->set_userdata($data_session);
				echo "<script>alert('Login Berhasil!')</script>";
				redirect(base_url('index.php/admin'));
			}
			else{	
				echo "<script>alert('Login Gagal!')</script>";
				$this->index();
			}
		}
	}
}
?>