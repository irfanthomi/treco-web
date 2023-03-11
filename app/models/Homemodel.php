<?php

class Homemodel extends CI_model
{

	public function menuheader()
	{
		return $this->db->query("SELECT * FROM menu WHERE kategori_menu='home' AND induk='0' ORDER BY urut");
	}
	public function team_home()
	{
		return $this->db->query("SELECT * from team order by id_team desc limit 4");
	}

	public function team_pengurus()
	{
		$this->db->select('t.*,j.jabatan as jb');
		$this->db->join('jabatan j', 'j.id = t.jabatan');
		$this->db->where('t.jabatan', 3);
		$team = $this->db->get('team t');
		return $team;
	}
	public function team_pembina()
	{
		$this->db->select('t.*,j.jabatan as jb');
		$this->db->join('jabatan j', 'j.id = t.jabatan');
		$this->db->where('t.jabatan', 4);
		$team = $this->db->get('team t');
		return $team;
	}

	public function depan_link_bottom($posisi)
	{
		return $this->db->query("SELECT * FROM link_ex WHERE posisi='$posisi' ORDER BY id_link desc")->result_array();
	}

	public function menudua($menu2 = '')
	{
		return $this->db->query("SELECT * FROM menu WHERE induk='$menu2' ORDER BY urut");
	}

	public function slider()
	{
		return $this->db->query("SELECT * FROM slider ORDER BY id_slider  desc limit 6");
	}
	function album()
	{

		return $this->db->get('album')->result_array();
	}

	public function artikel_awal()
	{
		return $this->db->query("SELECT * from artikel where kategori !=33 AND kategori !=34 order by id_artikel desc limit 8");
	}

	public function artikel_slide()
	{
		return $this->db->query("SELECT * from artikel where kategori !=33 AND kategori !=34 order by rand() desc limit 6");
	}

	public function artikel_t_awal()
	{
		return $this->db->query("SELECT * from artikel where kategori !=33 AND kategori !=34 order by rand() desc limit 6");
	}


	public function galeri_batas()
	{
		return $this->db->query("SELECT * from galeri a,album b where a.album=b.id_album limit 10");
	}


	public function sidebar()
	{
		return $this->db->query("SELECT * from artikel order by rand() desc limit 7");
	}

	public function kategori($id, $posisi, $batas)
	{
		$this->db->select("*");
		$this->db->from('artikel a');
		$this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
		$this->db->join('admin c', 'a.id_user=c.id_admin', 'left');
		$this->db->where('a.kategori', $id);
		$this->db->limit($posisi, $batas);
		$this->db->order_by('a.id_artikel', 'desc');

		return $this->db->get();
	}

	/* team */
	function team($batas, $offset)
	{

		$this->db->select('t.*, j.jabatan as jb');
		$this->db->order_by('t.id_team', 'desc');
		$this->db->join('jabatan j', 'j.id = t.jabatan');
		$query = $this->db->get('team t', $batas, $offset);
		return $query;
	}

	public function team_list()
	{
		$this->db->select('t.*,j.jabatan as jb');
		$this->db->join('jabatan j', 'j.id = t.jabatan');
		$team = $this->db->get('team t');
		return $team;
	}

	function video($batas, $offset)
	{
		$this->db->order_by('id_video', 'desc');
		$query = $this->db->get('video', $batas, $offset);
		return $query;
	}


	function galeri($batas, $offset)
	{
		$this->db->order_by('id_galeri', 'desc');
		$query = $this->db->get('galeri', $batas, $offset)->result_array();
		return $query;
	}


	public function agenda_home()
	{
		return $this->db->query("SELECT * from artikel where kategori =34 order by id_artikel desc limit 5");
	}

	public function pengumuman_home()
	{
		return $this->db->query("SELECT * from artikel where kategori =33 order by id_artikel desc limit 5");
	}

	public function pencarian($kata = '')
	{
		return $this->db->query("SELECT * from artikel where isi like '%$kata%' or judul like '%$kata%'");
	}


	function latest_news()
	{
		$this->db->select("*");
		$this->db->from('artikel a');
		$this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
		$this->db->join('admin c', 'a.id_user=c.id_admin', 'left');
		$this->db->where('b.id_kategori', 35);
		$this->db->order_by('a.id_artikel', 'DESC');
		$this->db->limit(8);
		return $this->db->get();
	}

	function lates_info()
	{
		$this->db->select("*");
		$this->db->from('artikel a');
		$this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
		$this->db->join('admin c', 'a.id_user=c.id_admin', 'left');
		$this->db->where('b.id_kategori', 36);
		$this->db->order_by('a.id_artikel', 'DESC');
		$this->db->limit(5);
		return $this->db->get();
	}
	function slide_news()
	{
		$this->db->select("*,DATE_FORMAT('%Y-%m-%d',a.tanggal) as tanggals");
		//$this->db->where('kategori', '36');
		$this->db->from('artikel a');
		$this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
		$this->db->join('admin c', 'a.id_user=c.id_admin', 'left');
		$this->db->order_by('a.id_artikel', 'ASC');
		$this->db->limit(4);
		return $this->db->get();
	}


	function slide()
	{
		$this->db->select('*');
		$this->db->from('slider');
		return $this->db->get();
	}

	function testimonial()
	{
		return $this->db->get('testimonial');
	}

	function artikel_detail($id)
	{
		$this->db->select("a.*,c.nama as user,b.kategori as kat");
		$this->db->from('artikel a');
		$this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
		$this->db->join('admin c', 'a.id_user=c.id_admin', 'left');
		$this->db->where('a.id_artikel', $id);
		$this->db->order_by('a.id_artikel', 'DESC');
		$this->db->limit(1);
		return $this->db->get();
	}

	function halaman_detail($id)
	{
		$this->db->select("*");
		$this->db->from('halaman a');
		$this->db->join('admin b', 'a.id_user=b.id_admin', 'left');
		$this->db->where('a.id_halaman', $id);
		$this->db->order_by('a.id_halaman', 'asc');
		$this->db->limit(1);
		return $this->db->get();
	}

	function kategori_sidebar()
	{
		$this->db->select("a.*,a.id_kategori,a.kategori as nama_kategori,count(b.id_artikel) as jumlah");
		$this->db->from('kategori a');
		$this->db->join('artikel b', 'a.id_kategori=b.kategori', 'left');
		$this->db->join('admin c', 'b.id_user=c.id_admin', 'left');
		$this->db->group_by('a.id_kategori', 'asc');
		$this->db->order_by('a.id_kategori', 'asc');
		return $this->db->get();
	}

	function download()
	{
		$this->db->select('*');
		$this->db->from('download a');
		$this->db->join('admin b', 'a.id_admin=b.id_admin', 'left');
		return $this->db->get();
	}

	function artikel_cari($id)
	{
		$this->db->select("*");
		$this->db->from('artikel a');
		$this->db->join('kategori b', 'a.kategori=b.id_kategori', 'left');
		$this->db->join('admin c', 'a.id_user=c.id_admin', 'left');
		$this->db->like('a.isi', $id);
		$this->db->or_like('a.judul', $id);
		$this->db->order_by('a.id_artikel', 'asc');
		return $this->db->get();
	}

	function link_ex()
	{
		return $this->db->get('link_ex');
	}

	function link_home()
	{
		$this->db->select('*');
		$this->db->from('link_ex');
		$this->db->where('posisi', 'home');
		$this->db->limit(3);
		return $this->db->get();
	}
	function product_category()
	{
		$this->db->select('pc.*');
		$this->db->from('product_category pc');
		$this->db->order_by('pc.product_category_id', 'desc');
		return $this->db->get()->result_array();
	}
	function product_category_first()
	{
		$this->db->select('pc.*');
		$this->db->from('product_category pc');
		$this->db->order_by('pc.product_category_id', 'desc');
		$this->db->limit(1);

		return $this->db->get()->result_array();
	}
	function product_category_second()
	{
		$this->db->select('pc.*');
		$this->db->from('product_category pc');
		$this->db->order_by('pc.product_category_id', 'desc');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}
	function product($category = '')
	{
		$ct = [];
		$where = '';
		if ($category) {
			for ($i = 0; $i < count((array)$category); $i++) {
				$ct[] = ' pc.product_category_name =  "' . $category[$i] . '" ';
			}
			$ct = implode("or", $ct);
			$where =	$this->db->where('(' . $ct . ')');
		}
		$this->db->select('p.*,pc.product_category_name,GROUP_CONCAT(pi.image_name SEPARATOR ",") as images');
		$this->db->from('product p');
		$this->db->join('product_category pc', 'pc.product_category_id = p.product_category');
		$this->db->join('product_images pi', 'pi.product_id = p.product_id', 'left');
		$where;
		$this->db->group_by('p.product_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	function product_view($id = '')
	{
		$this->db->select('p.*,pc.product_category_name,GROUP_CONCAT(pi.image_name SEPARATOR ",") as images');
		$this->db->from('product p');
		$this->db->join('product_category pc', 'pc.product_category_id = p.product_category');
		$this->db->join('product_images pi', 'pi.product_id = p.product_id', 'left');
		$this->db->where('p.product_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
}
