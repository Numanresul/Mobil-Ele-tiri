<?php

class Database_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		public function Insert_data($table,$data)
		{
			$this->db->insert($table,$data);
			return true;
		}
		public function Update_data($table,$data,$id)
		{
			$this->db->where("id",$id);
			$this->db->update($table,$data);
			return true;
		}
		
		
	
	}