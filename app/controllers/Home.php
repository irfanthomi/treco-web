<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Rtx_controller
{
	function __construct()
	{

		parent::__construct();
		$car = $_SERVER["REQUEST_URI"];
		$url = trim($car, '/' . $this->uri->segment(1) . '/' . $this->uri->segment(2));

		if (preg_match("/\.php/", $_SERVER['REQUEST_URI'])) {
			show_404();
			exit();
		} else {
			$this->load->helper('language');
			$this->load->model('homemodel');
			$this->load->model('M_admin');
			$this->load->helper('download');
		}
	}

	public function index()
	{
		$x['link_fakultas'] = $this->homemodel->depan_link_bottom('fakultas');
		$x['testimonial'] = $this->homemodel->testimonial();
		$x['latest'] = $this->homemodel->latest_news();
		$x['slide_news'] = $this->homemodel->slide_news();
		$x['slide'] = $this->homemodel->slider();
		$x['latesinfo'] = $this->homemodel->lates_info();
		$x['galeri']   = $this->db->get('galeri');
		$x['team']   = $this->homemodel->team_list();
		$x['judul']    = strip_tags(cari('Nama'));
		$x['setting']    = $this->M_admin->setting();
		$x['product_category_first'] = $this->homemodel->product_category_first();
		$x['product_category_second'] = $this->homemodel->product_category_second();
		$this->template->load('template', 'home/home', $x);
	}


	public function submission($id_journal = '', $journal = '')
	{
		not_found('journal', 'id_journal', $id_journal);
		$jnr = $this->db->get_where('journal', ['id_journal' => $id_journal])->row_array();

		$x = [
			'journal' => $jnr['journal']
		];
		if (isset($_POST['daftar'])) {
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[submission.email]');
			$this->form_validation->set_rules('no_hp', 'No_hp', 'required|is_unique[submission.no_hp]');
			$this->form_validation->set_rules('afiliasi', 'Afiliasi', 'required');

			if ($this->form_validation->run() == TRUE) {
				$nmfile = $this->input->post('nama') . "_file_" . time();
				$config['upload_path'] = './rn/file_submission/';
				$config['allowed_types'] = 'pdf|doc|docx';
				$config['max_size'] = '4048';
				$config['file_name'] = $nmfile;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($_FILES['artikel']['name']) {
					if ($this->upload->do_upload('artikel')) {
						$gbr = $this->upload->data();
						$artikel = $gbr['file_name'];
						$x = [
							'id_journal' => $id_journal,
							'nama' => $this->input->post('nama'),
							'email' => $this->input->post('email'),
							'no_hp' => $this->input->post('no_hp'),
							'afiliasi' => $this->input->post('afiliasi'),
							'artikel' => $artikel
						];
						$this->db->insert('submission', $x);
						$this->session->set_flashdata('pesan', "<script type='text/javascript'>
					

						$(document).ready(function() {
							
							swal({
							  title: 'Terimakasih',
							  text: 'Artikel Anda Sudah di Submit',
							  type: 'success',
							  showCancelButton: false,
							  confirmButtonColor: '#17a2b8',
							  confirmButtonText: 'Ok'
							}).then(function () {
								window.location.href = '/home';
							})
						  })
					   </script>");
						redirect(base_url('home/submission/' . $id_journal . '/' . $journal . ''));
					} else {
						$this->session->set_flashdata('pesan', '<span class=" text-danger ">File Gagal Upload Max. 2MB |pdf|doc|docx  </span>');
						redirect(base_url('home/submission/' . $id_journal . '/' . $journal . ''));
					}
				} else {
					$this->session->set_flashdata('pesan', '<span class="callout text-danger callout-danger">Gagal..! Tidak Ada File Upload</span>');
					$this->session->set_flashdata('pesan', "<script type='text/javascript'>
						$(document).ready(function() {
							swal(
								'Gagal..!',
								'Tidak Ada File Upload',
								'error'
							  )
						});
					   </script>");
					redirect(base_url('home/submission/' . $id_journal . '/' . $journal . ''));
				}
			} else {
				$this->template->load('template', 'home/submission', $x);
			}
		} else {

			$this->template->load('template', 'home/submission', $x);
		}
	}

	public function kategori($id, $offset = 0)
	{

		if (substr($_SERVER["REQUEST_URI"], -9) == "index.php") {

			echo "SERVER JSO ";
		} else {
			if (empty($id)) {
				show_404('');
				exit();
				$this->database->close();
			};

			$x['detail'] = $this->db->get_where('kategori', array('id_kategori' => $id));
			$total = $this->db->get_where('artikel', array('kategori' => $id))->num_rows();
			$per_pg = 6;
			$offset = $this->uri->segment(3);

			$config['base_url']			= base_url() . 'kategori/' . $id;
			$config['total_rows']		= $total;
			$config['per_page']			= $per_pg;
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = '&laquo; First';
			$config['first_tag_open'] = '<li class="page-item"><a>';
			$config['first_tag_close'] = '</a></li>';
			$config['last_link'] = 'Last &raquo;';
			$config['last_tag_open'] = '<li class="page-item"><a>';
			$config['last_tag_close'] = '</a>';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li class="page-item"><a>';
			$config['next_tag_close'] = '</a>';
			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li class="page-item"><a>';
			$config['prev_tag_close'] = '</a>';
			$config['cur_tag_open'] = '<li class="page-item"><span aria-current="page" class="page-numbers current">';
			$config['cur_tag_close'] = '</span></li>';
			$config['num_tag_open'] = '<li class="page-item"><a>';
			$config['num_tag_close'] = '</a></li>';

			$this->pagination->initialize($config);
			$x['pagination']		= $this->pagination->create_links();
			$x['query']			    = $this->homemodel->kategori($id, $per_pg, $offset);
			$x['kategori'] = $this->homemodel->kategori_sidebar();
			$x['sidebar'] = $this->homemodel->sidebar();
			$x['kat_kat'] = $this->homemodel->kategori_sidebar();
			$x['judul'] = ucfirst($x['detail']->row()->kategori);
			$this->template->load('template', 'home/kategori', $x);
		}
	}


	public function detail_informasi($id)
	{

		if (substr($_SERVER["REQUEST_URI"], -9) == "index.php") {

			echo "SERVER JSO ";
		} else {
			if (empty($id)) {
				show_404('');
				exit();
				$this->database->close();
			};
			$x['detail'] = $this->homemodel->artikel_detail($id);
			if ($x['detail']->num_rows() > 0) {
				$x['sidebar'] = $this->homemodel->sidebar();
				$x['latest'] = $this->homemodel->latest_news();
				$x['kategori'] = $this->homemodel->kategori_sidebar();
				$x['judul']  = strip_tags($x['detail']->row()->judul);
				$x['id']   = $id;
				$this->template->load('template', 'home/detail_informasi', $x);
			} else {
				show_404('');
				exit();
				$this->database->close();
			}
		}
	}

	function pencarian_informasi()
	{
		// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = strip_tags($this->input->post('kata'));
		$x['detail'] = $this->homemodel->artikel_cari($id);
		$x['sidebar'] = $this->homemodel->sidebar();
		$x['kategori'] = $this->homemodel->kategori_sidebar();
		$x['judul']  = strip_tags('Hasil Pencarian : ' . $id);
		$x['id']   = $id;
		$this->template->load('template', 'home/pencarian', $x);
		// }else{
		//    redirect(base_url());
		// }  

	}

	public function detail_halaman($id = '')
	{
		if (empty($id)) {
			show_404('');
			exit();
			$this->database->close();
		};
		$x['detail'] = $this->homemodel->halaman_detail($id);
		if ($x['detail']->num_rows() > 0) {
			$x['sidebar'] = $this->homemodel->sidebar();
			$x['kategori'] = $this->homemodel->kategori_sidebar();
			$x['judul']  = strip_tags($x['detail']->row()->judul);
			$this->template->load('template', 'home/detail_halaman', $x);
		} else {
			show_404('');
			exit();
			$this->database->close();
		}
	}

	public function galeri()
	{

		$total = $this->db->get('galeri')->num_rows();
		$batas = 8;
		$offset = $this->uri->segment(2);

		$config['base_url']			= base_url() . '/galeri/';
		$config['total_rows']		= $total;
		$config['per_page']			= $batas;
		$config['full_tag_open'] = '<ul class="pagination theme-colored">';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$x['pagination']		= $this->pagination->create_links();
		$x['galeri']	 = $this->homemodel->galeri($batas, $offset);
		$x['album']	 = $this->homemodel->album();
		$x['judul'] = "Galeri Foto";
		$this->template->load('template', 'home/galeri_foto', $x);
	}


	public function team($offset = 0)
	{
		$total = $this->db->get('team')->num_rows();
		$batas = 8;
		$offset = $this->uri->segment(3);
		$config['base_url']			= base_url() . '/team/';
		$config['total_rows']		= $total;
		$config['per_page']			= $batas;
		$config['full_tag_open'] = '<ul class="pagination theme-colored">';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$x['page']		= $this->pagination->create_links();
		$x['team']			    = $this->homemodel->team($batas, $offset);
		$x['judul'] = "Data team";

		$this->template->load('template', 'home/team', $x);
	}
	// bagian video 

	public function video($offset = 0)
	{
		$total = $this->db->get('video')->num_rows();
		$batas = 4;
		$offset = $this->uri->segment(2);
		$config['base_url']			= base_url() . '/video/';
		$config['total_rows']		= $total;
		$config['per_page']			= $batas;
		$config['full_tag_open'] = '<ul class="pagination theme-colored">';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$x['page']		= $this->pagination->create_links();
		$x['video']			    = $this->homemodel->video($batas, $offset);
		$x['judul'] = "Galeri Video";

		template('video', $x);
	}


	public function download_aksi($id = '')
	{
		if (empty($id)) {
			show_404('');
			exit();
			$this->database->close();
		};

		$data = $this->db->get_where('download', array('id_download' => $id));
		force_download($data->row()->nama_file, file_get_contents('asset/download/' . $data->row()->nama_file));
	}



	public function download()
	{
		$x = array(
			'judul' => 'Direktori download data',
			'download' => $this->homemodel->download()
		);

		$this->template->load('template', 'home/download', $x);
	}
	/*end bagian informasi */

	public function cari()
	{
		$kata = barasiah($this->input->post('kata'));
		$x = array(
			'judul' => 'Hasil Pencarian ' . strip_tags($this->input->post('kata')),
			'sidebar' => $this->homemodel->sidebar(),
			'kat_kat' => $this->homemodel->kategori_sidebar(),
			'cari' => $this->homemodel->pencarian($kata),
		);
		template('pencarian', $x);
	}

	public function blog_team()
	{

		$this->load->view('home/blog_team');
	}

	public function sertifikat_akreditasi()
	{


		$this->load->view('home/sertifkat');
	}
	function halaman_404_()
	{
		$x = array(
			'judul' => 'Halaman Yang Anda Cari Tidak Di Temukan ',
			'sidebar' => $this->homemodel->sidebar(),
			'kat_kat' => $this->homemodel->kategori_sidebar(),
		);
		$this->template->load('template', 'home/404', $x);
	}

	/*additinc of page*/

	function program()
	{
		$x = array(
			'judul' => 'Program Studi Dan Akreditas',
			'detail' => $this->db->get_where('halaman', array('id_halaman' => 21)),
		);
		template('program_studi', $x);
	}

	function organisasi()
	{
		$x = [
			'page' => "Struktur Organisasi",
			'team'   => $this->homemodel->team_list(),
			'team_pembina' => $this->homemodel->team_pembina(),
			'team_pengurus' => $this->homemodel->team_pengurus(),
		];
		template('organisasi', $x);
	}
	function contact()
	{
		$x['judul'] = '';
		template('contact', $x);
	}
	function product()
	{
		// die;
		$x = [
			'judul' => 'Product',
			'product' => $this->homemodel->product()
		];
		$this->template->load('template', 'home/product', $x);
	}
	function kalkulator()
	{
		$x = [
			'judul' => 'Kalkulator',
		];
		$this->template->load('template', 'home/kalkulator', $x);
	}
	/**/
	function project()
	{
		$x = [
			'judul' => 'Our project',
		];
		$this->template->load('template', 'home/project', $x);
	}
	/**/
}