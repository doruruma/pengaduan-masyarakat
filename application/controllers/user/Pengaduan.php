<?php

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengaduanModel', 'pengaduan');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Membuat Pengaduan',
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('public/tambahPengaduan')
            ->view('layouts/footer');
    }

    public function histori()
    {
        $data = [
            'title' => 'E-report | Pengaduan Saya',
            'pengaduan' => $this->pengaduan->getPengaduanByMasyarakat($this->session->user['id'])
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('public/historiPengaduan')
            ->view('layouts/footer');
    }

}