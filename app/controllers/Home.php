<?php

class Home extends Controller {

    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['email'])) {
            ob_start();
            header('Location: ' . 'http://localhost:8080/templatemvc/public/Login');
            ob_end_flush();
            die();
        }
        
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}