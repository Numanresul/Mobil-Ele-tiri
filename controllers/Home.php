<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library("session");				
		$this->load->helper('url');		
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
		$this->load->view('slider');
		$this->load->view('_slidebar');
		$this->load->view('_main_content');
		$this->load->view('_footer');
		//echo "admine gelll";
	}
	
	public function urun_detay($id)
	{
		
		$sql="SELECT kategoriler.adi as katadi, 
		telefonlar. * FROM telefonlar 
		LEFT JOIN kategoriler 
		ON telefonlar.kategori_id=kategoriler.id 
		WHERE telefonlar.id=".$id;
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kategori"]=$sorgu->result();
		$data["menu"]="detay";
		
		$sorgu=$this->db->query("SELECT * FROM yourum WHERE telefon_id=$id");
		$data["yorumlar"]=$sorgu->result();
		$data["id"]=$id;
		
		
		
		$sorgu=$this->db->query($sql);
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM telefonlar_resim WHERE telefonlar_id=$id");
		$data["veriler"]=$sorgu->result();
		$data["id"]=$id;
		
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		
		
	
		$this->load->view('_header',$data);
        $this->load->view('slider');		
		$this->load->view('urun_detay');
		
		
		
	}
	public function bize_yazin()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$data["menu"]="bize_yazin";
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$this->load->view('_header',$data);
	
		$this->load->view('_slidebar');
		$this->load->view('bize_yazin');
		$this->load->view('_footer');
	}
	public function tel_kategori($id)
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$data["menu"]="telefonlar";
		
		$sql="SELECT kategoriler.adi as katadi, 
		telefonlar. * FROM telefonlar 
		LEFT JOIN kategoriler 
		ON telefonlar.kategori_id=kategoriler.id 
		WHERE telefonlar.kategori_id=".$id;
		$query=$this->db->query($sql);
		$data["veri"]=$query->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$this->load->view('_header',$data);
		
		$this->load->view('_slidebar');
		$this->load->view('tel_kategori1');
		$this->load->view('_footer');
	}
	public function markalar($marka)
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$data["menu"]="telefonlar";
		
		$sorgu=$this->db->query("SELECT * FROM telefonlar WHERE marka='$marka'");
		$data["markalar"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("telefonlar");		
		$data["yeniler"]=$query->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		
		
		$this->load->view('_header',$data);
	
		$this->load->view('_slidebar');
		$this->load->view('_markalar');
		$this->load->view('_footer');
	}
	
	public function iletisim()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$data["menu"]="iletisim";
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$this->load->view('_header',$data);
		
		$this->load->view('_slidebar');
		$this->load->view('iletisim');
		$this->load->view('_footer');
	}
	public function hakkimizda()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$data["menu"]="hakkimizda";
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$this->load->view('_header',$data);
		
		$this->load->view('_slidebar');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function makaleler()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("makaleler");		
		$data["makaleler"]=$query->result();
		$data["menu"]="makaleler";
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('slider');
		$this->load->view('_slidebar');
		$this->load->view('makaleler');
		$this->load->view('_footer');
	}
	public function haberler()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		$data["menu"]="home";
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$this->load->view('_header',$data);
		$this->load->view('_slidebar');
	
		$this->load->view('_footer');
	}
	public function makale($id)
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM makaleler WHERE id=$id");
		$dati["makaleler"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$data["menu"]="makaleler";
		
		$this->load->view('_header',$data);
		
		$this->load->view('_slidebar');
		$this->load->view('makale_metin',$dati);
		$this->load->view('_footer');
	}
	public function haber($id)
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM haberler WHERE id=$id");
		$dati["haberler"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$data["menu"]="home";
		
		$this->load->view('_header',$data);
	
		$this->load->view('_slidebar');		
		$this->load->view('haber_metin',$dati);
		$this->load->view('_footer');
	}
	public function telefonlar()
	{
		$query=$this->db->get("ayarlar");		
		$data["ayarlar"]=$query->result();
		$query=$this->db->get("telefonlar");		
		$data["yeniler"]=$query->result();
		
		$sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		$data["veris"]=$sorgu->result();
		
		$query=$this->db->get("haberler");		
		$data["haberler"]=$query->result();
		
		$data["menu"]="telefonlar";
		
		$this->load->view('_header',$data);
		
		$this->load->view('_slidebar');
		$this->load->view('telefonlar');
		$this->load->view('_footer');
	}
	public function mesaj_ekle()
	{
	$data=array(
	'adsoy'=>$this->input->post('adsoy'),
	'email'=>$this->input->post('email'),
	'tel'=>$this->input->post('tel'),
	'konu'=>$this->input->post('konu'),
	'mesaj'=>$this->input->post('mesaj')
	
	);
$this->Database_Model->Insert_data("mesajlar",$data);




              $adsoy=$this->input->post('adsoy');
			  $email=$this->input->post('email');
			  
			  $sorgu=$this->db->query("SELECT DISTINCT marka FROM telefonlar ");
		     $data["veris"]=$sorgu->result();
		
			  $query=$this->db->get("ayarlar");		
		      $data["ayarlar"]=$query->result();
			  
			  $query=$this->db->get("haberler");		
		      $data["haberler"]=$query->result();
		
			 $config=Array(
			 'protocol'=>'smtp',
			 'smtp_host'=>$data["ayarlar"][0]->smtpserver,
			 'smtp_port'=>$data["ayarlar"][0]->smtpport,
			 'smtp_user'=>$data["ayarlar"][0]->smtpmail,
			 'smtp_pass'=>$data["ayarlar"][0]->password,
			 'mailtype'=>'html',
			 'charset'=>'utf-8',
			 'wordwrape'=>TRUE);
			 
			 $mesaj="Değerli |".$adsoy."<br>Göndermiş olduğunuz mesaj tarafımıza ulaşmıştır.<br>Teşekkür ederiz<br>";
			 $mesaj.="=======================================================================<br>";
			 $mesaj.=$data["ayarlar"][0]->name."<br>";
			 $mesaj.=$data["ayarlar"][0]->adres."<br>";
			 $mesaj.=$data["ayarlar"][0]->sehir."<br>";
			 $mesaj.=$data["ayarlar"][0]->tel."<br>";
			 $mesaj.=$data["ayarlar"][0]->fax."<br>";
			 $mesaj.=$data["ayarlar"][0]->email."<br>";
			 $mesaj.="Göndermiş olduğunuz mesaj aşağıdadır<br>================<br>";
			 $mesaj.=$this->input->post('mesaj');
			 
			 $this->load->library('email', $config);
			 $this->email->set_newline("/r/n");
			 $this->email->from($data["veri"][0]->smtpmail);
			 $this->email->to($email);
			 $this->email->subject($data["veri"][0]->name."Mobil Eleştiri Mesajı");
			 $this->email->message($mesaj);
			 
			 if($this->email->send())
				 $this->session->set_flashdata("email_sent","MESAJINIZ BAŞARI İLE GÖNDERİLMİŞTİR!!!");
			 
			 else
			 {
				 $this->session->set_flashdata("email_sent","email gönderiminde hata oluştu");
				 show_error($this->email->print_debugger());
			 }
			 
			 
			 
			 
			  
			  




$this->session->set_flashdata("SONUÇ","MESAJINIZ BAŞARI İLE GÖNDERİLMİŞTİR!!!");
redirect(base_url()."Home/bize_yazin");
		
	}
}




