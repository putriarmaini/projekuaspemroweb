<?php

class Sdgs extends Controller {
    public function index(){

        $data['judul'] = 'Sdgs';

		$this->view('templates/header', $data);
        $this->view('sdgs/index', $data);
        $this->view('templates/footer');
    }

}