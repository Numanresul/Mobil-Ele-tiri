<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

	function __construct()
	{	
	    parent::__construct();
		$this->load->library("session");		
		$this->load->helper('url');
		$this->load->database();	
		if(! $this->session->userdata('logged_in')){
			redirect(base_url().'admin/login');
		}
	
	}
	
	
	public function index()
	{
		$query=$this->db->get("kullanicilar");
		$data["veri"]=$query->result();
		$this->load->view('admin/_header');
		$this->load->view('admin/_slidebar');
		$this->load->view('admin/kullanicilar_listesi',$data);
		$this->load->view('admin/_footer');
		//echo "admine gelll";
	}
}
