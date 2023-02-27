<?php

class About extends Controller {

    public function index($nama = 'Zulfan', $kelas = 12, $jurusan = 'RPL')
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['email'])) {
            ob_start();
            header('Location: ' . 'http://localhost:8080/templatemvc/public/Login');
            ob_end_flush();
            die();
        }
        
        $data['nama'] = $nama;
        $data['kelas'] = $kelas;
        $data['jurusan'] = $jurusan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}