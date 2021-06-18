<?php

class Event extends Controller {
    public function index(){

        $data['judul'] = 'Event';

		$this->view('templates/header', $data);
        $this->view('event/index', $data);
        $this->view('templates/footer');
    }

}