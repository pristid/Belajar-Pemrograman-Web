<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $data['siswa'] = $this->Mymodel->getData()->result();

        $this->load->view('template/header');
        $this->load->view('siswa', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $logo = $_FILES['logo'];

        if ($logo = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                echo "Upload Gagal";
                die();
            } else {
                $logo = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama'  => $nama,
            'alamat' => $alamat,
            'logo' => $logo
        ];

        $this->Mymodel->addData($data, 'sekolah');
        redirect('Siswa/index');
    }

    public function delete($id)
    {
        $where = [
            'id' => $id
        ];

        $this->Mymodel->deleteData($where, 'sekolah');
        redirect('Siswa/index');
    }

    public function edit($id)
    {
        $where = ["id" => $id];
        $data['siswa'] = $this->Mymodel->getDataById($where, 'sekolah')->result();

        $this->load->view('template/header');
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $logo = $_FILES['logo'];

        if ($logo = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                echo "Upload Gagal";
                die();
            } else {
                $logo = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama'  => $nama,
            'alamat' => $alamat,
            'logo' => $logo
        ];

        $where = ['id' => $id];

        $this->Mymodel->updateData($where, $data, 'sekolah');
        redirect('Siswa/index');
    }

    public function pdf($id)
    {
        $this->load->library('pdf');
        $where = ["id" => $id];
        $data['siswa'] = $this->Mymodel->getDataById($where, 'sekolah')->result();

        $html = $this->load->view('tabel', $data, true);
        $filename = 'data siswa' . time();
        $this->pdf->generate($html, $filename, true, 'A4', 'portrait');
    }
}