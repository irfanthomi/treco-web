<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Widget extends Rtx_controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect(base_url(''));
            $this->db->close();
            exit();
        };
        $this->load->model('Widget_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data : Widget';
        $this->load->view('admin/header', $x);
        $this->load->view('widget/widget_list');
        $this->load->view('admin/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Widget_model->json();
    }

    public function detail($id)
    {
        $row = $this->Widget_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_widget' => $row->id_widget,
                'parameter' => $row->parameter,
                'nilai' => $row->nilai,
                'bagian' => $row->bagian,
                'tanggal' => $row->tanggal,
                'judul' => 'Detail :  WIDGET',
            );
            $this->load->view('admin/header', $data);
            $this->load->view('widget/widget_read');
            $this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(base_url('widget'));
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Widget',
            'button' => 'Create',
            'action' => base_url('widget/tambah_data'),
            'id_widget' => set_value('id_widget'),
            'parameter' => set_value('parameter'),
            'nilai' => set_value('nilai'),
            'bagian' => set_value('bagian'),
            'tanggal' => set_value('tanggal'),
        );
        $this->load->view('admin/header', $data);
        $this->load->view('widget/widget_form');
        $this->load->view('admin/footer');
    }

    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'parameter' => $this->input->post('parameter', TRUE),
                'nilai' => $this->input->post('nilai', TRUE),
                'bagian' => $this->input->post('bagian', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),
            );

            $this->Widget_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(base_url('widget'));
        }
    }

    public function edit($id)
    {
        $row = $this->Widget_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data WIDGET',
                'button' => 'Update',
                'action' => base_url('widget/edit_data'),
                'id_widget' => set_value('id_widget', $row->id_widget),
                'parameter' => set_value('parameter', $row->parameter),
                'nilai' => set_value('nilai', $row->nilai),
                'bagian' => set_value('bagian', $row->bagian),
                'tanggal' => set_value('tanggal', $row->tanggal),
            );
            $this->load->view('admin/header', $data);
            $this->load->view('widget/widget_form');
            $this->load->view('admin/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(base_url('widget'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_widget', TRUE));
        } else {
            $data = array(
                'parameter' => $this->input->post('parameter', TRUE),
                'nilai' => $this->input->post('nilai', TRUE),
                'bagian' => $this->input->post('bagian', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),
            );

            $this->Widget_model->update($this->input->post('id_widget', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(base_url('widget'));
        }
    }

    public function hapus($id)
    {
        $row = $this->Widget_model->get_by_id($id);

        if ($row) {
            $this->Widget_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(base_url('widget'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(base_url('widget'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('parameter', 'parameter', 'trim|required');
        $this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
        $this->form_validation->set_rules('bagian', 'bagian', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

        $this->form_validation->set_rules('id_widget', 'id_widget', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "widget.xls";
        $judul = "widget";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Parameter");
        xlsWriteLabel($tablehead, $kolomhead++, "Nilai");
        xlsWriteLabel($tablehead, $kolomhead++, "Bagian");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");

        foreach ($this->Widget_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->parameter);
            xlsWriteLabel($tablebody, $kolombody++, $data->nilai);
            xlsWriteLabel($tablebody, $kolombody++, $data->bagian);
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
        header("Content-Disposition: attachment;Filename=widget.doc");

        $data = array(
            'widget_data' => $this->Widget_model->get_all(),
            'start' => 0
        );

        $this->load->view('template', 'widget/widget_doc', $data);
    }
}
