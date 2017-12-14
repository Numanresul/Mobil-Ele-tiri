<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telefonlar extends CI_Controller {

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
		
		$sql="SELECT kategoriler.adi as katadi, 
		telefonlar. * FROM telefonlar 
		LEFT JOIN kategoriler 
		ON telefonlar.kategori_id=kategoriler.id ";
		$query=$this->db->query($sql);
		$data["veri"]=$query->result();
		$this->load->view('admin/_header');
		$this->load->view('admin/_slidebar');
		$this->load->view('admin/telefonlar_yonetimi',$data);
		$this->load->view('admin/_footer');
		//echo "admine gelll";
	}
	public function ekle()
	{
		
	    $this->load->view('admin/telefonlar_ekle');
	
	
		
	}
	public function eklekaydet()
	{
	$data=array(
	'marka'=>$this->input->post('marka'),
	'model'=>$this->input->post('model'),
	'aciklama'=>$this->input->post('aciklama'),
	'ozellikler'=>$this->input->post('ozellikler'),
	'fiyat'=>$this->input->post('fiyat'),
	'ctarih'=>$this->input->post('ctarih'),
	'durum'=>$this->input->post('durum'),
	'kategori_id'=>$this->input->post('kategori_id'),
	'keywords'=>$this->input->post('keywords')
	);
$this->Database_Model->Insert_data("telefonlar",$data);
$this->session->set_flashdata("SONUÇ","KAYIT EKLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/Telefonlar");
		
	}
	public function edit($id)
	{
		$sql="SELECT kategoriler.adi as katadi, 
		telefonlar. * FROM telefonlar 
		LEFT JOIN kategoriler 
		ON telefonlar.kategori_id=kategoriler.id 
		WHERE telefonlar.id=".$id;
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kategori"]=$sorgu->result();
		
		
		
		$sorgu=$this->db->query($sql);
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/telefonlar_duzenle',$data);
		
        		
	}
	public function preview($id)
	
	{
		$sql="SELECT kategoriler.adi as katadi, 
		telefonlar. * FROM telefonlar 
		LEFT JOIN kategoriler 
		ON telefonlar.kategori_id=kategoriler.id
        WHERE telefonlar.id=".$id;
		$sorgu=$this->db->query($sql);
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/telefonlar_goster',$data);	
		
	}
	public function delete($id)
	{
		$this->db->query("DELETE FROM telefonlar WHERE id=$id");
		$this->session->set_flashdata("SONUÇ","KAYIT SİLME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
        redirect(base_url()."admin/Telefonlar");
		
		
		
	}
	public function guncellekaydet($id)
	{
	$data=array(
	
	'marka'=>$this->input->post('marka'),
	'model'=>$this->input->post('model'),
	'aciklama'=>$this->input->post('aciklama'),
	'ozellikler'=>$this->input->post('ozellikler'),
	'fiyat'=>$this->input->post('fiyat'),
	'ctarih'=>$this->input->post('ctarih'),
	'durum'=>$this->input->post('durum'),
	'kategori_id'=>$this->input->post('kategori_id'),
	'keywords'=>$this->input->post('keywords')
	);
$this->Database_Model->Update_data("telefonlar",$data,$id);
$this->session->set_flashdata("SONUÇ","KAYIT GÜNCELLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/Telefonlar");
		
	}
	
	public function resim_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM telefonlar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$data["id"]=$id;
		$this->load->view('admin/telefonlar_resim_ekleme_formu',$data);	
		
	}
	public function resim_upload($id)
	{
		
	  $config['upload_path']= './uploads/';
                $config['allowed_types']= 'gif|jpg|png';
                $config['max_size']= 10024;
                $config['max_width']= 8000;
                $config['max_height'] = 6000;
		
                $this->load->library('upload', $config);
	if( ! $this->upload->do_upload('userfile')){
		$error=array('error'=>$this->upload->display_errors());
		print_r ($error);
		$this->session->set_flashdata("SONUÇ","Resim Upload Edilemedi!!!");
		redirect(base_url()."admin/Telefonlar/resim_ekle/$id");
		
	}
	else 
	{
 
					$data=array(
	'resim'=>$this->upload->data('file_name'));
	

	
	
	
                         $this->Database_Model->Update_data("telefonlar",$data,$id);
                         $this->session->set_flashdata("SONUÇ","Resim Upload Edildi!!!");
                        
                        redirect(base_url()."admin/telefonlar");
                
	}
	}
	public function resim_galeri_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM telefonlar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM telefonlar_resim WHERE telefonlar_id=$id");
		$data["veriler"]=$sorgu->result();
		$data["id"]=$id;
		
		$this->load->view('admin/resim_galeri_ekleme_formu',$data);	
		
	}
	public function resim_galeri_upload($id)
	{
	  $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10024;
                $config['max_width']            = 8000;
                $config['max_height']           = 6000;
		
                $this->load->library('upload', $config);
	if( ! $this->upload->do_upload('userfile')){
		$error=array('error'=>$this->upload->display_errors());
		$this->session->set_flashdata("SONUÇ","Resim Upload Edilemedi!!!");
		redirect(base_url()."admin/Telefonlar/resim_galeri_ekle/$id");
		
	}
	else 
	{
 
					$data=array(
					'telefonlar_id'=>$id,
	'resim'=>$this->upload->data('file_name'));
	

	
	
	
                         $this->Database_Model->Insert_data("telefonlar_resim",$data);
                         $this->session->set_flashdata("SONUÇ","Resim Upload Edildi!!!");
                        
                        redirect(base_url()."admin/Telefonlar/resim_galeri_ekle/$id");
                
	}
	}
	public function delete_resim($id,$resim_id)
	{
		$this->db->query("DELETE FROM telefonlar_resim WHERE id=$resim_id");
		$this->session->set_flashdata("SONUÇ","KAYIT SİLME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
        redirect(base_url()."admin/Telefonlar/resim_galeri_ekle/$id");
		
		
		
	}
	public function ayarlar_yonetimi()
	{
		
		$sorgu=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$sorgu->result();
		
		
		$this->load->view('admin/ayarlar_yonetimi',$data);
		
		//echo "admine gelll";
	}
	public function ayarlarguncelle($id)
	{
	$data=array(
	
	'marka'=>$this->input->post('marka'),
	'keywords'=>$this->input->post('keywords'),
	'aciklama'=>$this->input->post('aciklama'),
	'name'=>$this->input->post('name'),
	'smtpserver'=>$this->input->post('smtpserver'),
	'smtpport'=>$this->input->post('smtpport'),
	'smtpmail'=>$this->input->post('smtpmail'),
	'password'=>$this->input->post('password'),
	'adres'=>$this->input->post('adres'),
	'sehir'=>$this->input->post('sehir'),
	'tel'=>$this->input->post('tel'),
	'fax'=>$this->input->post('fax'),
	'email'=>$this->input->post('email'),
	'hakkimizda'=>$this->input->post('hakkimizda'),
	'iletisim'=>$this->input->post('iletisim'),
	'facebook'=>$this->input->post('facebook'),
	'twitter'=>$this->input->post('twitter'),
	'instagram'=>$this->input->post('instagram')
	
	);
$this->Database_Model->Update_data("ayarlar",$data,$id);
$this->session->set_flashdata("SONUÇ","KAYIT GÜNCELLEME İŞLEMİ BAŞARI İLE GERÇEKLEŞTİ!!!");
redirect(base_url()."admin/Telefonlar/ayarlar_yonetimi");
		
	}
	
}
	

