<?php

class Login extends Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Login';

        $this->view('templates/header', $data);
        $this->view('login/login', $data);
        $this->view('templates/footer');
	}

	public function prosesLogin() {
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['session_login'] = 'sudah_login'; 
				
				header('location: '. baseurl . '/home');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. baseurl . '/login');
			exit;	
		}
	}
}