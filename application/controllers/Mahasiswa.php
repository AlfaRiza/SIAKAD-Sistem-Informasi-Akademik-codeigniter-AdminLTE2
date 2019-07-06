<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama');
        $nim        = $this->input->post('nim');
        $jurusan    = $this->input->post('jurusan');
        $data = array(
            'nama'      => $nama,
            'nim'       => $nim,
            'jurusan'    => $jurusan
        );

        $this->m_mahasiswa->input_data($data, 'mahasiswa');
        redirect('mahasiswa/index');
    }

    public function hapus($id)
    {
        $where = ['id' => $id];
        $this->m_mahasiswa->hapus_data($where, 'mahasiswa');
        redirect('mahasiswa/index');
    }

    public function edit($id)
    {
        $where = [
            'id' => $id
        ];
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'mahasiswa')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $jurusan = $this->input->post('jurusan');

        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'jurusan' => $jurusan,
        ];

        $where = [
            'id' => $id
        ];

        $this->m_mahasiswa->update_data($where, $data, 'mahasiswa');
        redirect('mahasiswa/index');
    }
}
