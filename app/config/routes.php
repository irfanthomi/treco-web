<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller']       = "home";
$route['index.jsp']                = "home/index";
$route['informasi/(:any)/(:any)']  = 'home/detail_informasi/$1/$2';
$route['halaman/detail/(:any)/(:any)']  = 'home/detail_halaman/$1';
$route['Reset-Password.asp']       = 'akses/lupa_password';
$route['galeri']                   = 'home/galeri';
$route['organisasi']               = 'home/organisasi';
$route['galeri/(:any)']            = 'home/galeri/$1';
$route['kategori/(:any)']          = 'home/kategori/$1';
$route['kategori/(:any)/(:any)']   = 'home/kategori/$1/$2';
$route['team']                      = 'home/team';
$route['submission/(:any)/(:any)'] = 'home/submission/$1/$2';
$route['dosen/(:any)']             = 'home/dosen/$1';
$route['video']                      = 'home/video';
$route['video/(:any)']             = 'home/video/$1';
$route['download']                 = 'home/download';
$route['product']                 = 'home/product';
$route['cari']                     = 'home/cari';
$route['kalkulator']                     = 'home/kalkulator';
$route['contact.html']             = 'home/contact';
$route['blog-dosen.html']          = 'home/blog_dosen';
$route['sertifikat-akreditasi']    = 'home/sertifikat_akreditasi';
/*page require*/
$route['program.kuliah.unes']    = 'home/program';
$route['404_override'] = 'home/halaman_404_';
$route['translate_uri_dashes'] = FALSE;