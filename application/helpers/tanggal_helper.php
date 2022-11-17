<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cek_session($level){
  $CI =& get_instance();
  if (empty($_SERVER['USER_AGENT'])) {
     $alamat=base_url('');
  }else{
    $alamat=$_SERVER['USER_AGENT'];
  }

  if($CI->session->userdata('level') != $level){
   show_error('<h1>HAK AKSES TIDAK DI IZINKAN </h1><br/ >KE MENU AWAL UNTUK MEMULAI APLIKASI.
    <br />
    Kembali Kehalaman Saya Berasal  ? <a href="'.$alamat.'">Kembali</a>
    ');
   exit();
   $this->db->close(); 
  }else{
   
  }
}


function session_demo($level){
  $CI =& get_instance();
  if (empty($_SERVER['USER_AGENT'])) {
     $alamat=base_url('');
  }else{
    $alamat=$_SERVER['USER_AGENT'];
  }

  if($CI->session->userdata('level') != $level){
   show_error('<h1>Maaf aksi ini tidak tersedia dalam versi Demo</h1>
    <br />
    Kembali Kehalaman Saya Berasal  ? <a href="'.$alamat.'">Kembali</a>
    ');
   exit();
   $this->db->close(); 
  }else{
   
  }
}


  function template($konten,$array)
  {
  $CI =& get_instance();
  $CI->load->view('home/header',$array);
  $CI->load->view('home/'.$konten);
  $CI->load->view('home/footer');
  }
 

function seo($kata) {
    $simbol = array ('"','"','-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','�','&','*','=','?','+');
	
	//Menghilangkan simbol pada array $simbol
    $kata = str_replace($simbol, '', $kata); 
    
	//Ubah ke huruf kecil dan mengganti spasi dengan (-)
    $kata = strtolower(str_replace(' ', '-', $kata)); 
    
	return $kata;
}

 function detail_informasi($id='',$seo='')
{
 	 $CI =& get_instance();
 	 return base_url('informasi/'.$id.'/'.seo($seo));
}

function url_kategori($id,$seo){
   $CI =& get_instance();
   return base_url('kategori/'.$id.'/'.seo($seo));
}

 function detail_halaman($id='',$seo='')
{
 	 $CI =& get_instance();
 	 return base_url($id.'/halaman/'.$seo);
}


function tgl_indonesia($tgl){
	$nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		
	$tanggal = substr($tgl,8,2);
	$bulan = $nama_bulan[(int)substr($tgl,5,2)];
	$tahun = substr($tgl,0,4);
	
	return $tanggal.' '.$bulan.' '.$tahun;		 
}	


function cari($params){
 $CI =& get_instance();
 $CI->db->select('*');
 $CI->db->from('setting');
 $data = $CI->db->get()->row_array();
 return $data[$params];
}

