<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KullanicilarYON extends CI_Controller {

	function __construct()
	{	
	
		parent::__construct();
		$this->load->library('session');		
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Database_Model');
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
		$this->load->view('admin/kullanicilar_yonetimi',$data);
		$this->load->view('admin/_footer');
		//echo "admine gelll";
	}
	public function ekle()
	{
	$this->load->view('admin/kullanici_ekle');
	
		
	}
	public function eklekaydet()
	{
	$data=array(
	'adsoy'=>$this->input->post('adsoy'),
	'email'=>$this->input->post('email'),
	'yetki'=>$this->input->post('yetki'),
	'cinsiyet'=>$this->input->post('cinsiyet'),
	'durum'=>$this->input->post('durum'),
	'sifre'=>$this->input->post('sifre')
	);
$this->Database_Model->Insert_data("kullanicilar",$data);
$this->session->set_flashdata("SONUÇ","KAYIT EKLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/KullanicilarYON");
		
	}
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_duzenle',$data);	
	}
	public function preview($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_goster',$data);	
		
	}
	public function delete($id)
	{
		$this->db->query("DELETE FROM kullanicilar WHERE id=$id");
		$this->session->set_flashdata("SONUÇ","KAYIT SİLME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
        redirect(base_url()."admin/KullanicilarYON");
		
		
		
	}
	public function guncellekaydet($id)
	{
	$data=array(
	'adsoy'=>$this->input->post('adsoy'),
	'email'=>$this->input->post('email'),
	'yetki'=>$this->input->post('yetki'),
	'cinsiyet'=>$this->input->post('cinsiyet'),
	'durum'=>$this->input->post('durum'),
	'sifre'=>$this->input->post('sifre')
	);
$this->Database_Model->Update_data("kullanicilar",$data,$id);
$this->session->set_flashdata("SONUÇ","KAYIT GÜNCELLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/KullanicilarYON");
		
	}
	
}
	

