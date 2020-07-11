<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {
    public function index(){
        if (!empty($this->session->userdata('no_id'))){
            $this->load->view('donatur/index');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    public function donasi(){
        $this->load->view('donatur/donasi');
    }
    
    public function tambah_donasi($no_id){
		$this->load->model('mymodel');
        $data = array(
			'no_id' => $no_id,
			'nama' => $this->input->post('nama'),
			'jenis_donasi' => $this->input->post('jenis_donasi'),
			'jumlah' => $this->input->post('jumlah'),
			'ket' => $this->input->post('ket'),
			'tgl_donasi' => $this->input->post('tgl_donasi')
		);
		$query = $this->mymodel->Insert('donasi',$data);
		if($query){
			echo "<script>alert('Tambah donasi sukses!')</script>";
			$this->index();
		} else {
			echo "<script>alert('Tambah donasi gagal!')</script>";
			$this->index();
		}
    }
    
    public function liat_donasi($no_id){
		$this->load->model('mymodel');
		$donasi = $this->mymodel->GetWhere('donasi', array('no_id' => $no_id));
		$data = array('data' => $donasi);
		$this->load->view('donatur/list',$data);
    }

    public function profil($no_id){
		$this->load->model('mymodel');
		$donatur = $this->mymodel->GetWhere('donatur', array('no_id' => $no_id));
        $data = array(
            'no_id' => $donatur[0]['no_id'],
            'nama' => $donatur[0]['nama'],
            'alamat' => $donatur[0]['alamat'],
            'kota' => $donatur[0]['kota'],
            'kode_pos' => $donatur[0]['kode_pos'],
            'no_telp' => $donatur[0]['no_telp'],
            'email' => $donatur[0]['email']
        );
		$this->load->view('donatur/profil',$data);
    }

    public function profil_edit($no_id){
		$this->load->model('mymodel');
        $data = array(
            'no_id' => $no_id,
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'kode_pos' => $this->input->post('kode_pos'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email')
        );
        $where = array('no_id' => $no_id); 
        $query = $this->mymodel->Update('donatur', $data, $where);
        if ($query){
            echo "<script>alert('Edit Profil Sukses')</script>";
            $this->profil($no_id);
        } else
        {
            echo "<script>alert('Edit Profil Gagal')</script>";
            $this->profil($no_id);
        }
    }
}
?>