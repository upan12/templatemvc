<?php

class Login extends Controller
{
    public function index()
    {   
        
        $data['judul'] = 'Login';
        
        $this->view('templates/header2', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function loginProses ()
    {
      if(session_status() === PHP_SESSION_NONE) session_start();
        $email = $_POST ['email'];
        $password = $_POST['password']; 
        
        $data['login'] = $this->model('Login_model')->getUser($email, $password);
        
        if($data['login'] == NULL)
        {
          Flasher::setFlash('Belum' , 'Terdaftar', 'danger');
          header("Location: " . BASEURL . '/Login');
          exit;
        } else {
          foreach($data['login'] as $row) :
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            {
              header("Location: " . BASEURL . "/mahasiswa");
            }
          endforeach;
        }
    }

    public function logout()
    {
      if(session_status() === PHP_SESSION_NONE) session_start();
      unset($_SESSION['email']);
      session_destroy();
      header("Location: " . 'http://localhost:8080/templatemvc/public/Login/loginProses');
      die();
    }
  }

