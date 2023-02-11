<?php


function admin_template($konten, $array)
{

  $CI = &get_instance();
  $CI->load->view('admin/header', $array);
  $CI->load->view($konten);
  $CI->load->view('admin/footer');
}
function not_found($tabel, $kolom, $value)
{

  // $value_real=stripslashes(strip_tags(htmlspecialchars($value,ENT_QUOTES)));

  $CI = &get_instance();
  $q = $CI->db->limit(1)->get_where($tabel, [$kolom => $value])->row_array();
  if (!$q) {
    redirect('' . base_url() . '');
    die;
  }
}