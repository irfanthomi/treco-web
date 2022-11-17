<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Link_ex extends Rtx_controller
{
    function __construct()
    {
        parent::__construct();
        //login_access();
        //hak_akses();
        $this->load->model('Link_ex_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Setting Menu Depan Home';
        $this->load->view('admin/header', $x);
        $this->load->view('link_ex/link_ex_list');
        $this->load->view('admin/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Link_ex_model->json();
    }

    public function detail($id)
    {
        $row = $this->Link_ex_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_link' => $row->id_link,
                'link' => $row->link,
                'judul' => $row->judul,
                'isi' => $row->isi,

                'judul' => 'Detail :  LINK_EX',
            );

            $this->load->view('admin/header', $data);
            $this->load->view('link_ex/link_ex_read');
            $this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(base_url('link_ex'));
        }
    }

    public function tambah()
    {
        $cek = $this->db->get_where('link_ex', array('posisi' => 'home'));
        if ($cek->num_rows() == 3) {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Maaf Limit Yang Di Izinkan Hanya 3 Data.</div>');
            redirect(base_url('link_ex'));
            exit();
        }

        $data = array(
            'judul' => 'Tambah Link ex',
            'button' => 'Create',
            'action' => base_url('link_ex/tambah_data'),
            'id_link' => set_value('id_link'),
            'link' => set_value('link'),
            'judul' => set_value('judul'),
            'isi' => set_value('isi'),
            'posisi' => set_value('posisi'),
        );
        $this->load->view('admin/header', $data);
        $this->load->view('link_ex/link_ex_form');
        $this->load->view('admin/footer');
    }

    public function tambah_data()
    {
        $cek = $this->db->get_where('link_ex', array('posisi' => 'home'));
        if ($cek->num_rows() == 3) {
            $this->session->set_flashdata('message', '<div class="callout callout-warniing">Maaf Limit Yang Di Izinkan Hanya 3 Data.</div>');
            redirect(base_url('link_ex'));
            //   exit();
        }
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'link' => $this->input->post('link', TRUE),
                'judul' => $this->input->post('judul', TRUE),
                'isi' => $this->input->post('isi', TRUE),
                'posisi' => 'home',
            );
            $this->Link_ex_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(base_url('link_ex'));
        }
    }

    public function edit($id)
    {
        $row = $this->Link_ex_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data LINK_EX',
                'button' => 'Update',
                'action' => base_url('link_ex/edit_data'),
                'id_link' => set_value('id_link', $row->id_link),
                'link' => set_value('link', $row->link),
                'judul' => set_value('judul', $row->judul),
                'isi' => set_value('isi', $row->isi),
                'posisi' => set_value('posisi', $row->posisi),
            );
            $this->load->view('admin/header', $data);
            $this->load->view('link_ex/link_ex_form');
            $this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(base_url('link_ex'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_link', TRUE));
        } else {
            $data = array(
                'link' => $this->input->post('link', TRUE),
                'judul' => $this->input->post('judul', TRUE),
                'isi' => $this->input->post('isi', TRUE),
                'posisi' => 'home',
            );

            $this->Link_ex_model->update($this->input->post('id_link', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(base_url('link_ex'));
        }
    }

    public function hapus($id)
    {
        $row = $this->Link_ex_model->get_by_id($id);

        if ($row) {
            $this->Link_ex_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(base_url('link_ex'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(base_url('link_ex'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('link', 'link', 'trim|required');
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');
        $this->form_validation->set_rules('id_link', 'id_link', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "link_ex.xls";
        $judul = "link_ex";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Link");
        xlsWriteLabel($tablehead, $kolomhead++, "Judul");
        xlsWriteLabel($tablehead, $kolomhead++, "Isi");
        xlsWriteLabel($tablehead, $kolomhead++, "Posisi");

        foreach ($this->Link_ex_model->get_all() as $data) {
            $kolombody = 0;
            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->link);
            xlsWriteLabel($tablebody, $kolombody++, $data->judul);
            xlsWriteLabel($tablebody, $kolombody++, $data->isi);
            xlsWriteLabel($tablebody, $kolombody++, $data->posisi);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=link_ex.doc");

        $data = array(
            'link_ex_data' => $this->Link_ex_model->get_all(),
            'start' => 0
        );

        $this->load->view('template', 'link_ex/link_ex_doc', $data);
    }
}
