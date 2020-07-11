<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        if (!empty($this->session->userdata('no_id'))){
            $this->load->view('admin/index');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function cek_donasi(){
        $this->load->model('mymodel');
		$donasi = $this->mymodel->Get('donasi');
        $data = array('data' => $donasi);
		$this->load->view('admin/list',$data);
    }
    public function cek_donatur(){
        $this->load->model('mymodel');
        $where = array(
            'role_id' => "2"
        );
		$donasi = $this->mymodel->GetWhere('donatur', $where);
        $data = array('data' => $donasi);
		$this->load->view('admin/donatur',$data);
    }
    public function verif_donasi($id_donasi){
        $this->load->model('mymodel');
        $where = array(
            'id_donasi' => $id_donasi
        );
        $update = array(
            'status' => "Terkonfirmasi"
        );
		$query = $this->mymodel->Update('donasi',$update, $where);
		$this->cek_donasi();
    }
    public function hapus($id_donasi){
        $this->load->model('mymodel');
        $id = array(
            'id_donasi' => $id_donasi
        );
        $query = $this->mymodel->Delete('donasi',$id);
        if($query){
            echo "<script>alert('Hapus donasi sukses!')</script>";
            $this->cek_donasi();
        } else {
            echo "<script>alert('Hapus donasi gagal!')</script>";
            $this->cek_donasi();
        }
    }
}
?>