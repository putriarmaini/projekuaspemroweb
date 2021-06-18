<?php

class Pencemaran_model{

	private $table = 'pencemaran';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

    public function getAllPencemaran()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

}