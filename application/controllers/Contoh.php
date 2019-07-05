<?php
class Contoh extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_mhs');
        $data['mahasiswa'] = $this->m_mhs->getData();
        $this->load->view('vmhs', $data);
    }
}
