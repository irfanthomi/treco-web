<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimonial extends Rtx_controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect(base_url(''));
            $this->db->close();
            exit();
        };
        $this->load->model('Testimonial_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data : Testimonial';
        $this->load->view('admin/header', $x);
        $this->load->view('testimonial/testimonial_list', $x);
        $this->load->view('admin/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Testimonial_model->json();
    }

    public function detail($id)
    {
        $row = $this->Testimonial_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_testimonial' => $row->id_testimonial,
                'isi' => $row->isi,
                'nama' => $row->nama,
                'keterangan' => $row->keterangan,
                'gambar' => $row->gambar,
                'tanggal' => $row->tanggal,

                'judul' => 'Detail :  TESTIMONIAL',
            );
            $this->load->view('admin/header', $data);
            $this->load->view('testimonial/testimonial_read');
            $this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(base_url('testimonial'));
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Testimonial',
            'button' => 'Create',
            'action' => base_url('testimonial/tambah_data'),
            'id_testimonial' => set_value('id_testimonial'),
            'isi' => set_value('isi'),
            'nama' => set_value('nama'),
            'keterangan' => set_value('keterangan'),
            'gambar' => set_value('gambar'),
            'tanggal' => set_value('tanggal'),
        );
        $this->load->view('admin/header', $data);
        $this->load->view('testimonial/testimonial_form');
        $this->load->view('admin/footer');
    }

    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $nmfile = "file_" . time();
            $config['upload_path'] = './rn/gambar_tes/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '4048';
            $config['file_name'] = $nmfile;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $data = array(
                    'isi' => $this->input->post('isi', TRUE),
                    'nama' => $this->input->post('nama', TRUE),
                    'keterangan' => $this->input->post('keterangan', TRUE),
                    'gambar' => $this->upload->file_name,
                    'tanggal' => $this->input->post('tanggal', TRUE),
                );

                $this->Testimonial_model->insert($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
                redirect(base_url('testimonial'));
            } else {
                $this->session->set_flashdata('message', $this->upload->display_errors('<div class="alert alert-success fade-in"><i class="fa fa-check"></i>', '</div>'));
                redirect(base_url('testimonial'));
            }
        }
    }

    public function edit($id)
    {
        $row = $this->Testimonial_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data TESTIMONIAL',
                'button' => 'Update',
                'action' => base_url('testimonial/edit_data'),
                'id_testimonial' => set_value('id_testimonial', $row->id_testimonial),
                'isi' => set_value('isi', $row->isi),
                'nama' => set_value('nama', $row->nama),
                'keterangan' => set_value('keterangan', $row->keterangan),
                'gambar' => set_value('gambar', $row->gambar),
                'tanggal' => set_value('tanggal', $row->tanggal),
            );
            $this->load->view('admin/header', $data);
            $this->load->view('testimonial/testimonial_form');
            $this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(base_url('testimonial'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_testimonial', TRUE));
        } else {
            $nmfile = "file_" . time();
            $config['upload_path'] = './rn/gambar_tes/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '4048';
            $config['file_name'] = $nmfile;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar')) {
                $id = $this->input->post('id_testimonial', TRUE);
                $dat = $this->db->get_where('testimonial', array('id_testimonial' => $id))->result();
                unlink('./rn/gambar_tes/' . $dat->gambar);
                $data = array(
                    'isi' => $this->input->post('isi', TRUE),
                    'nama' => $this->input->post('nama', TRUE),
                    'keterangan' => $this->input->post('keterangan', TRUE),
                    'gambar' => $this->upload->file_name,
                    'tanggal' => $this->input->post('tanggal', TRUE),
                );
                $this->Testimonial_model->update($this->input->post('id_testimonial', TRUE), $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
                redirect(base_url('testimonial'));
            } else {
                $this->session->set_flashdata('message', $this->upload->display_errors('<div class="alert alert-success fade-in"><i class="fa fa-check"></i>', '</div>'));
                redirect(base_url('testimonial'));
            }
        }
    }

    public function hapus($id)
    {
        $row = $this->Testimonial_model->get_by_id($id);
        $dat = $this->db->get_where('testimonial', array('id_testimonial' => $id))->result();
        unlink('./rn/gambar_tes/' . $dat->gambar);
        if ($row) {
            $this->Testimonial_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(base_url('testimonial'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(base_url('testimonial'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('id_testimonial', 'id_testimonial', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "testimonial.xls";
        $judul = "testimonial";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Isi");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama");
        xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
        xlsWriteLabel($tablehead, $kolomhead++, "Gambar");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

        foreach ($this->Testimonial_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->isi);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama);
            xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
            xlsWriteLabel($tablebody, $kolombody++, $data->gambar);
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
        header("Content-Disposition: attachment;Filename=testimonial.doc");

        $data = array(
            'testimonial_data' => $this->Testimonial_model->get_all(),
            'start' => 0
        );

        $this->load->view('template', 'testimonial/testimonial_doc', $data);
    }
}
