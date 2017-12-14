<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->helper('url');
	    $this->load->library('form_validation',"session");
	    $this->load->library("session");
		$this->load->model("uye_Model");
		$this->load->database();
		$this->load->model('Database_Model');
		
	}
	
	
	
		public function index()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$query=$this->db->get("telefonlar");		
		$data["yeniler"]=$query->result();
		
		$query=$this->db->get("telefonlar");		
		$data["encok"]=$query->result();
		
		$query=$this->db->get("telefonlar");		
		$data["karegoriler"]=$query->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$data["menu"]="home";
		
		$this->load->view('_header',$data);
        $this->load->view('_slidebar');
		$this->load->view('login_formu');
		$this->load->view('_footer');
	}	
		public function profil()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$query=$this->db->get("telefonlar");		
		$data["yeniler"]=$query->result();
		
		$query=$this->db->get("telefonlar");		
		$data["encok"]=$query->result();
		
		$query=$this->db->get("telefonlar");		
		$data["karegoriler"]=$query->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$data["menu"]="home";
		
		$this->load->view('_header',$data);
        $this->load->view('_slidebar');
		$this->load->view('profil');
		$this->load->view('_footer');
	}	
	public function guncellekaydet($id)
	{
	$data=array(
	
	'adsoy'=>$this->input->post('adsoy'),
	'email'=>$this->input->post('email'),
	'sifre'=>$this->input->post('sifre')
		
	);
$this->Database_Model->Update_data("uyeler",$data,$id);
$this->session->set_flashdata("SONUÇ","PROFİL GÜNCELLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ! LÜTFEN ÇIKIŞ YAPIP YENİ BİLGİLERİNİZLE TEKRAR GİRİŞ YAPINIZ");

redirect(base_url()."login");
		
	}
		public function login_ol()
	{
	
		$email=$this->input->post('email',TRUE);
		$sifre=$this->input->post('password',TRUE);
		$result = $this->uye_Model->login($email,$sifre);
		
		
		if($result)
		{
			$sess_array=array(
			'id'=>$result[0]->id,
			
			'email'=>$result[0]->email,
			'adsoy'=>$result[0]->adsoy,
			'sifre'=>$result[0]->sifre,
			
			);
			$this->session->set_userdata('logged_on',$sess_array);
			redirect(base_url().'home');
		}
		else
		{
			$this->session->set_flashdata("login_hata","Giriş parametreleri yanlış!!");
			redirect(base_url()."login");
		} 
		
	}
	public function log_out()
		{
			$this->session->unset_userdata('logged_on');
			$this->session->sess_destroy();
			redirect(base_url().'home');
		}
	public function eklekaydet()
	{
	$data=array(
    
	'adsoy'=>$this->input->post('adsoy'),
	'email'=>$this->input->post('email'),
	'sifre'=>$this->input->post('sifre'),
	'id'=>$this->input->post('id')
	);
$this->Database_Model->Insert_data("uyeler",$data);
$this->session->set_flashdata("SONUÇ","HABER EKLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."Home");
		
	}
	public function yorum($id)
	{
	$data=array(
    
	'yorum'=>$this->input->post('yorum'),
	'kisi'=>$this->input->post('kisi'),
	'telefon_id'=>$this->input->post('telefon_id')
	
	);
$this->Database_Model->Insert_data("yourum",$data);
$this->session->set_flashdata("SONUÇ","YORUM EKLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."Home/urun_detay/$id");
		
	}

}
