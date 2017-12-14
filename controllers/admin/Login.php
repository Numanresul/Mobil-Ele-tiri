<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->helper('url');
	    $this->load->library('form_validation',"session");
	    $this->load->library("session");
		$this->load->model("Admin_Model");
		$this->load->database();
		
	}
	
	
	
		public function index()
	{
		$this->load->view('admin/login_formu');
	}	
		public function login_ol()
	{
	
		$email=$this->input->post('email',TRUE);
		$sifre=$this->input->post('password',TRUE);
		$result = $this->Admin_Model->login($email,$sifre);
		
		
		if($result)
		{
			$sess_array=array(
			'id'=>$result[0]->id,
			'yetki'=>$result[0]->yetki,
			'email'=>$result[0]->email,
			'adsoy'=>$result[0]->adsoy,
			'durum'=>$result[0]->durum,
			'cinsiyet'=>$result[0]->cinsiyet
			);
			$this->session->set_userdata('logged_in',$sess_array);
			redirect(base_url().'admin/home');
		}
		else
		{
			$this->session->set_flashdata("login_hata","Giriş parametreleri yanlış!!");
			$this->load->view('admin/login_formu');
		} 
		
	}
	public function log_out()
		{
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			redirect(base_url().'admin/login');
		}
}
