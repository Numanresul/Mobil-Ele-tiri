<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MakalelerYON extends CI_Controller {

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
		$query=$this->db->get("makaleler");
		$data["makaleler"]=$query->result();
		$this->load->view('admin/_header');
		$this->load->view('admin/_slidebar');
		$this->load->view('admin/makaleler_yonetimi',$data);
		$this->load->view('admin/_footer');
		//echo "admine gelll";
	}
	public function ekle()
	{
	$this->load->view('admin/makale_ekle');
	
		
	}
	public function eklekaydet()
	{
	$data=array(
	
	'konu'=>$this->input->post('konu'),
	'baslik'=>$this->input->post('baslik'),
	'metin'=>$this->input->post('metin'),
	'aciklama'=>$this->input->post('aciklama'),
	'keywords'=>$this->input->post('keywords'),
	'id'=>$this->input->post('id')
	);
$this->Database_Model->Insert_data("makaleler",$data);
$this->session->set_flashdata("SONUÇ","MAKALE EKLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/makalelerYON");
		
	}
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM makaleler WHERE id=$id");
		$data["makaleler"]=$sorgu->result();
		$this->load->view('admin/makale_duzenle',$data);	
	}
	public function preview($id)
	{
		$sorgu=$this->db->query("SELECT * FROM makaleler WHERE id=$id");
		$data["makaleler"]=$sorgu->result();
		$this->load->view('admin/makale_goster',$data);	
		
	}
	public function delete($id)
	{
		$this->db->query("DELETE FROM makaleler WHERE id=$id");
		$this->session->set_flashdata("SONUÇ","MAKALE SİLME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
        redirect(base_url()."admin/MakalelerYON");
		
		
		
	}
	public function guncellekaydet($id)
	{
	$data=array(
	
	'konu'=>$this->input->post('konu'),
	'baslik'=>$this->input->post('baslik'),
	'aciklama'=>$this->input->post('aciklama'),
	'keywords'=>$this->input->post('keywords'),
	'metin'=>$this->input->post('metin')
		
	);
$this->Database_Model->Update_data("makaleler",$data,$id);
$this->session->set_flashdata("SONUÇ","MAKALE GÜNCELLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/makalelerYON");
		
	}
	
}
	

