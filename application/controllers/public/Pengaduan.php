<?php

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginPublic();
        $this->load->model('PengaduanModel', 'pengaduan');
    }

    public function index()
    {
        $this->pengaduan->validation();
        if ($this->form_validation->run()) {
            $this->pengaduan->insert();
        } else {
            $data = [
                'title' => 'E-report | Membuat Pengaduan',
                'pageJS' => 'public/tambahPengaduan.js'
            ];
            $this->load->view('layouts/header', $data)
                ->view('layouts/nav')
                ->view('public/tambahPengaduan')
                ->view('layouts/footer');
        }
    }

    public function detail()
    {
        if (!isset($_GET['id'])) {
            redirect('/public/home');
        }
        $this->load->view('layouts/header', $data)
            ->load->view('layouts/nav')
            ->load->view('public/detail')
            ->load->view('layouts/footer');
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
