<?php

class Logout {
	public function Logout(){
		session_start();
		session_destroy();
		header('location: '. baseurl . '/login');
	}
}