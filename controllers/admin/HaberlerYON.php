<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HaberlerYON extends CI_Controller {

	function __construct()
	{	
	
		parent::__construct();
		$this->load->library('session');		
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('Database_Model');
	if(! $this->session->userdata('logged_in')){
			redirect(base_url().'admin/login');
		}
	
	}
	
	
	public function index()
	{
		$query=$this->db->get("haberler");
		$data["veri"]=$query->result();
		$this->load->view('admin/_header');
		$this->load->view('admin/_slidebar');
		$this->load->view('admin/haberler_yonetimi',$data);
		$this->load->view('admin/_footer');
		//echo "admine gelll";
	}
	public function ekle()
	{
	$this->load->view('admin/haberler_ekle');
	
		
	}
	public function eklekaydet()
	{
	$data=array(
    'resim'=>$this->input->post('resim'),
	'konu'=>$this->input->post('konu'),
	'baslik'=>$this->input->post('baslik'),
	'metin'=>$this->input->post('metin'),
	'aciklama'=>$this->input->post('aciklama'),
	'keywords'=>$this->input->post('keywords'),
	'id'=>$this->input->post('id')
	);
$this->Database_Model->Insert_data("haberler",$data);
$this->session->set_flashdata("SONUÇ","HABER EKLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/HaberlerYON");
		
	}
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM haberler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/haberler_duzenle',$data);	
	}
	public function preview($id)
	{
		$sorgu=$this->db->query("SELECT * FROM haberler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/haberler_goster',$data);	
		
	}
	public function delete($id)
	{
		$this->db->query("DELETE FROM haberler WHERE id=$id");
		$this->session->set_flashdata("SONUÇ","HABER SİLME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
        redirect(base_url()."admin/HaberlerYON");
		
		
		
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
$this->Database_Model->Update_data("haberler",$data,$id);
$this->session->set_flashdata("SONUÇ","HABER GÜNCELLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/HaberlerYON");
		
	}
	public function resim_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM haberler WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$data["id"]=$id;
		$this->load->view('admin/haberler_resim_ekleme_formu',$data);	
		
	}
	public function resim_upload($id)
	{
		
	  $config['upload_path']=config_item('base_url').'uploads/';
                $config['allowed_types']= 'gif|jpg|png';
                $config['max_size']= 10024;
                $config['max_width']= 8000;
                $config['max_height'] = 6000;
		
                $this->load->library('upload', $config);
	if( ! $this->upload->do_upload('userfile'))
	{
		$error=array('error'=>$this->upload->display_errors());
		$this->session->set_flashdata("SONUÇ","Haber Upload Edilemedi!!!");
		redirect(base_url()."admin/HaberlerYON");
		
	}
	else 
	{

					$data=array(
	'resim'=>$this->upload->data('file_name'));
	

	
	
	
                         $this->Database_Model->Update_data("haberler",$data,$id);
                         $this->session->set_flashdata("SONUÇ","Resim Upload Edildi!!!");
                        
                        redirect(base_url()."admin/HaberlerYON");
                
	}
	}
	
}
	

