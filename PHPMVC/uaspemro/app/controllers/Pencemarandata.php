<?php

class Pencemarandata extends Controller {
    public function index(){

        $data['judul'] = 'Pencemarandata';

		$this->view('templates/header', $data);
        $this->view('pencemarandata/index', $data);
        $this->view('templates/footer');
    }

}