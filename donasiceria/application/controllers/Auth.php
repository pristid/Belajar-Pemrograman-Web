<?php
class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $auth = $this->Model_auth->check_login();

            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                $this->load->view('login');
            } else {
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('role_id', $auth->role_id);
                switch ($auth->role_id) {
                    case 1:
                        $this->load->view('admin/index');
                        break;
                    case 2:
                        $this->load->view('donatur/index');
                        break;
                }
            }
        }
    }

    // public function registrasi()
    // {
    //     $this->form_validation->set_rules('nama', 'Name', 'required');
    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('admin/header');
    //         $this->load->view('admin/registrasi');
    //         $this->load->view('admin/footer');
    //     } else {
    //         $data = [
    //             'id' => '',
    //             'nama' => $this->input->post('nama'),
    //             'username' => $this->input->post('username'),
    //             'password' => $this->input->post('password'),
    //             'role_id'  => 2
    //         ];

    //         $this->db->insert('tb_user', $data);
    //         redirect('Auth/login');
    //     }
    // }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect('auth/login');
    // }
}
