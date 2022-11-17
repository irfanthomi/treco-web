<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_model
{

  public function team()
  {
    $this->db->select('t.*,j.jabatan as jb');
    $this->db->join('jabatan j', 'j.id = t.jabatan');
    $team = $this->db->get('team t');
    return $team;
  }


  public function home_admin($value = '')
  {
    return $this->db->query("SELECT * from artikel a ,kategori b where a.kategori=b.id_kategori order by a.id_artikel desc limit 5")->result();
  }

  public function select_where($table = '', $param = '', $bidang = '')
  {
    return $this->db->query("SELECT * from $table where $param='$bidang'");
  }

  function artikel()
  {
    return $this->db->query('SELECT * FROM artikel order by id_artikel desc');
  }

  function submission()
  {
    $this->db->select('s.id_submission, s.nama, s.no_hp, s.email, s.afiliasi, j.journal, s.artikel');
    $this->db->from('submission s');
    $this->db->join('journal j', 'j.id_journal = s.id_journal');

    return $this->db->get()->result_array();
  }

  public function menu_utama()
  {
    return $this->db->query("SELECT * FROM menu WHERE kategori_menu='home' AND induk='0' ORDER BY urut");
  }

  public function menu_sub_utama($induk)
  {
    return $this->db->query("SELECT * FROM menu WHERE induk='$induk' ORDER BY urut");
  }

  public function select_where_home($table = '', $param = '', $bidang = '')
  {
    return $this->db->query("SELECT * from $table where $param='$bidang' order by id_artikel desc limit 10");
  }

  public function select_limit($nama = '', $param = '', $jumlah = '')
  {
    return $this->db->query("SELECT * from $nama order by $param desc limit $jumlah");
  }


  public function select_where_menu($table = '', $param = '', $bidang = '')
  {
    return $this->db->query("SELECT * from $table where $param='$bidang' ORDER BY urut");
  }


  public function select_where_and($table = '', $param = '', $bidang = '', $tabel1 = '', $data1 = '', $order = '')
  {
    return $this->db->query("SELECT * from $table where $param='$bidang' and $tabel1='$data1' ORDER BY urut");
  }


  public function kategori($id = '', $offset = '', $limit = '')
  {
    return $this->db->query("SELECT * from artikel where kategori='$id' order by id_artikel DESC limit $offset,$limit");
  }

  public function tag($id = '', $offset = '', $limit = '')
  {
    return $this->db->query("SELECT * from artikel where tag='$id' order by id_artikel DESC limit $offset,$limit");
  }


  public function agenda($offset = '', $limit = '')
  {
    return $this->db->query("SELECT * from agenda order by id_agenda DESC limit $offset,$limit");
  }


  public function pilih($value = '')
  {
    return $this->db->query("SELECT * from $value");
  }


  function insertdata($tabel = '', $data = '')
  {

    return $this->db->insert($tabel, $data);
  }


  function updatedata($tabel = '', $data = '', $where = '')
  {
    return $this->db->update($tabel, $data, $where);
  }

  public function login($username = '', $password = '')
  {

    return $this->db->query("SELECT * from admin where username='$username' AND password='$password' limit 1");
  }

  public function cek_admin()
  {
    return $this->db->query("SELECT * from artikel a, admin b,kategori c where a.id_user=b.id_admin AND c.id_kategori=a.kategori order by a.id_artikel");
  }

  public function berita_semua($offset = '', $limit = '')
  {
    return $this->db->query("SELECT * from artikel a, admin b ,kategori c where a.id_user=b.id_admin 
		AND c.id_kategori=a.kategori order by a.id_artikel DESC limit $offset,$limit");
  }

  function setting()
  {

    return $this->db->get('setting')->row();
  }

  function galeri()
  {
    $this->db->select('*');
    $this->db->from('galeri a');
    $this->db->join('album b', 'a.album=b.id_album', 'left');
    return $this->db->get();
  }


  function artikel_jumlah()
  {
    $this->db->select('*, sum(id_artikel) as jumlah');
    $this->db->from('artikel a');
    $this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
    $this->db->group_by('a.tanggal');
    return $this->db->get();
  }

  function jumlah_halaman()
  {
    $this->db->select('*, sum(id_halaman) as jumlah');
    $this->db->from('halaman a');
    $this->db->join('admin b', 'a.id_user=b.id_admin', 'left');
    $this->db->group_by('a.tanggal');
    return $this->db->get();
  }


  /*menentukan aawal dawn akhir dari tanggal artikel*/

  function awal_akhir($asc)
  {
    $this->db->select('tanggal as tg');
    $this->db->from('artikel');
    $this->db->order_by('tanggal', $asc);
    $data = $this->db->get()->row_array();
    return $data['tg'];
  }


  /*end penentuan*/
}