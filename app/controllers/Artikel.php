<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artikel extends Rtx_controller
{
    function __construct()
    {
        parent::__construct();
        // login_access();
        // hak_akses();
        $this->load->model('Artikel_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data : Artikel';
        $this->template->load('template', 'artikel/artikel_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Artikel_model->json();
    }

    public function detail($id)
    {
        $row = $this->Artikel_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_artikel' => $row->id_artikel,
                'judul' => $row->judul,
                'judul_seo' => $row->judul_seo,
                'isi' => $row->isi,
                'gambar' => $row->gambar,
                'id_user' => $row->id_user,
                'kategori' => $row->kategori,
                'hits' => $row->hits,
                'tanggal' => $row->tanggal,

                'judul' => 'Detail :  ARTIKEL',
            );
            $this->template->load('template', 'artikel/artikel_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('artikel'));
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Artikel',
            'button' => 'Create',
            'action' => site_url('artikel/tambah_data'),
            'id_artikel' => set_value('id_artikel'),
            'judul' => set_value('judul'),
            'judul_seo' => set_value('judul_seo'),
            'isi' => set_value('isi'),
            'gambar' => set_value('gambar'),
            'id_user' => set_value('id_user'),
            'kategori' => set_value('kategori'),
            'hits' => set_value('hits'),
            'tanggal' => set_value('tanggal'),
        );
        $this->template->load('template', 'artikel/artikel_form', $data);
    }

    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'judul' => $this->input->post('judul', TRUE),
                'judul_seo' => $this->input->post('judul_seo', TRUE),
                'isi' => $this->input->post('isi', TRUE),
                'gambar' => $this->input->post('gambar', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'kategori' => $this->input->post('kategori', TRUE),
                'hits' => $this->input->post('hits', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),
            );

            $this->Artikel_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('artikel'));
        }
    }

    public function edit($id)
    {
        $row = $this->Artikel_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data ARTIKEL',
                'button' => 'Update',
                'action' => site_url('artikel/edit_data'),
                'id_artikel' => set_value('id_artikel', $row->id_artikel),
                'judul' => set_value('judul', $row->judul),
                'judul_seo' => set_value('judul_seo', $row->judul_seo),
                'isi' => set_value('isi', $row->isi),
                'gambar' => set_value('gambar', $row->gambar),
                'id_user' => set_value('id_user', $row->id_user),
                'kategori' => set_value('kategori', $row->kategori),
                'hits' => set_value('hits', $row->hits),
                'tanggal' => set_value('tanggal', $row->tanggal),
            );
            $this->template->load('template', 'artikel/artikel_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('artikel'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_artikel', TRUE));
        } else {
            $data = array(
                'judul' => $this->input->post('judul', TRUE),
                'judul_seo' => $this->input->post('judul_seo', TRUE),
                'isi' => $this->input->post('isi', TRUE),
                'gambar' => $this->input->post('gambar', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'kategori' => $this->input->post('kategori', TRUE),
                'hits' => $this->input->post('hits', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),
            );

            $this->Artikel_model->update($this->input->post('id_artikel', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('artikel'));
        }
    }

    public function hapus($id)
    {
        $row = $this->Artikel_model->get_by_id($id);

        if ($row) {
            $this->Artikel_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('artikel'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('artikel'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('judul_seo', 'judul seo', 'trim|required');
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');
        $this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
        $this->form_validation->set_rules('id_user', 'id user', 'trim|required');
        $this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
        $this->form_validation->set_rules('hits', 'hits', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

        $this->form_validation->set_rules('id_artikel', 'id_artikel', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "artikel.xls";
        $judul = "artikel";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
        xlsWriteLabel($tablehead, $kolomhead++, "Judul");
        xlsWriteLabel($tablehead, $kolomhead++, "Judul Seo");
        xlsWriteLabel($tablehead, $kolomhead++, "Isi");
        xlsWriteLabel($tablehead, $kolomhead++, "Gambar");
        xlsWriteLabel($tablehead, $kolomhead++, "Id User");
        xlsWriteLabel($tablehead, $kolomhead++, "Kategori");
        xlsWriteLabel($tablehead, $kolomhead++, "Hits");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

        foreach ($this->Artikel_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->judul);
            xlsWriteLabel($tablebody, $kolombody++, $data->judul_seo);
            xlsWriteLabel($tablebody, $kolombody++, $data->isi);
            xlsWriteLabel($tablebody, $kolombody++, $data->gambar);
            xlsWriteLabel($tablebody, $kolombody++, $data->id_user);
            xlsWriteLabel($tablebody, $kolombody++, $data->kategori);
            xlsWriteLabel($tablebody, $kolombody++, $data->hits);
            xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=artikel.doc");

        $data = array(
            'artikel_data' => $this->Artikel_model->get_all(),
            'start' => 0
        );

        $this->load->view('template', 'artikel/artikel_doc', $data);
    }
}
