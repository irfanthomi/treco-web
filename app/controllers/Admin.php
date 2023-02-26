<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
* System information this created by ismarianto putra
*
*/


class Admin extends Rtx_controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect(base_url(''));
            $this->db->close();
            exit();
        };
        $this->load->model('M_admin');
        include APPPATH . 'third_party/password_encp.php';
    }

    private function input($data)
    {
        return crypt($data, 'unespadang');
    }

    private function hak_akses()
    {
        if ($this->session->userdata('level') == "user") {
            buat_alert('Maaf Anda Tidak Di Perkenan kan Mengakses Halaman Ini Hubungi Admin');
            $this->db->close();
            exit();
        };
    }


    public

    function index()
    {
        $x['home_admin'] = $this->m_admin->home_admin();
        $x['awal']  = $this->M_admin->awal_akhir('asc');
        $x['sampai'] = $this->M_admin->awal_akhir('desc');
        $x['informasi'] = $this->db->get('artikel');
        $x['hits'] = $this->db->query("SELECT * from artikel order by hits desc")->num_rows();
        $x['halaman'] = $this->db->get('halaman');
        $x['admin'] = $this->db->get('admin');
        $x['set'] = $this->db->get('setting');
        $x['kategori'] = $this->db->get('kategori');
        $x['halaman'] = $this->db->get('kategori');
        $x['download'] = $this->db->get('download');
        $x['admin'] = $this->db->get_where('admin', array(
            'id_admin' => $this->session->userdata('id_user')
        ));
        $x['judul'] = ".::Welcome To Admin Panel::.";
        $this->load->view('admin/header', $x);
        $this->load->view('admin/home');
        $this->load->view('admin/footer');
    }
    // fungsi dari artikel

    public function artikel()
    {
        $x['judul'] = "Data informasi /Berita";
        $x['data'] = $this->M_admin->artikel();
        $x['kategori'] = $this->db->get('kategori')->result_array();
        if (isset($_POST['tambah'])) {
            $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['upload_path'] = './rn/gambar/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size'] = '4048'; //maksimum besar file 2M
            $config['file_name'] = $nmfile; //nama yang terupload nantinya
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($_FILES['gambar']['name']) {
                if ($this->upload->do_upload('gambar')) {
                    $gbr = $this->upload->data();
                    $gambar = $gbr['file_name'];
                    $judul = $this->input->post('judul');
                    $judul_seo = seo($this->input->post('judul'));
                    $isi = $this->input->post('isi');
                    $kategori = $this->input->post('kategori');
                    $tag = $this->input->post('tag');
                    $tanggal = date('Y-m-d H:i:s');
                    $id_user = $this->session->userdata('id_user');
                    $data = array(
                        'judul' => $judul,
                        'judul_seo' => $judul_seo,
                        'isi' => $isi,
                        'gambar' => $gambar,
                        'id_user' => $id_user,
                        'kategori' => $kategori,

                        'tanggal' => $tanggal,
                    );
                    $this->M_admin->insertdata('artikel', $data);
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambah</span>');
                    redirect(base_url('admin/artikel'));
                } else {
                    $this->session->set_flashdata('pesan', $this->upload->display_errors('<span class="callout text-success callout-danger">', '</div>'));
                    redirect(base_url('admin/artikel'));
                }
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Gambar Tidak ADA</span>');
                redirect(base_url('admin/artikel'));
            }
        } else {
            $this->load->view('admin/header', $x);
            $this->load->view('admin/artikel');
            $this->load->view('admin/footer');
        }
    }


    public  function artikel_edit($id = '')
    {
        cek_table('artikel', 'id_artikel', $id);
        if ($id == '') {
            redirect(base_url('admin/artikel'));
        }
        $query = $this->db->get_where('artikel', ['id_artikel' => $id]);
        $data = $query->result_array();
        $x = [
            'judul' => "Edit Artikel",
            'kategori' => $this->M_admin->pilih('kategori'),
            'aksi' => "edit",
            'isi' => $data[0]['isi'],
            'judul_artikel' => $data[0]['judul'],
            'gambar' => $data[0]['gambar'],
            'kategori' => $this->db->get('kategori')->result_array()

        ];
        if (isset($_POST['edit'])) {
            if (empty($_FILES['gambar']['name'])) {
                $judul = $this->input->post('judul');
                $judul_seo = seo($this->input->post('judul'));
                $isi = $this->input->post('isi');
                $kategori = $this->input->post('kategori');
                $tag = $this->input->post('tag');
                $tanggal = date('Y-m-d H:i:s');
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'judul' => $judul,
                    'judul_seo' => $judul_seo,
                    'isi' => $isi,
                    'id_user' => $id_user,
                    'kategori' => $kategori,
                    'tanggal' => $tanggal,
                );
                $this->M_admin->updatedata('artikel', $data, array(
                    'id_artikel' => $id
                ));
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Dat Berhasil Di Edit</span>');
                redirect(base_url('admin/artikel'));
            } else {
                $dat = $query->row();
                if ($dat->gambar != "") {
                    unlink('./rn/gambar/' . $dat->gambar);
                } else {
                }

                $nmfile = "file_" . time();
                $config['upload_path'] = './rn/gambar/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['max_size'] = '4048';
                $config['file_name'] = $nmfile; //nama yang terupload nantinya
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    @unlink('./rn/gambar/' . $query->row()->gambar);
                    $gbr = $this->upload->data();
                    $gambar = $gbr['file_name'];
                    $judul = $this->input->post('judul');
                    $isi = $this->input->post('isi');
                    $kategori = $this->input->post('kategori');
                    $tag = $this->input->post('tag');
                    $tanggal = date('Y-m-d');
                    $id_user = $this->session->userdata('id_user');
                    $data = array(
                        'judul' => $judul,
                        'judul_seo' => seo($this->input->post('judul')),
                        'isi' => $isi,
                        'id_user' => $id_user,
                        'gambar' => $this->upload->file_name,
                        'kategori' => $kategori,
                        'tanggal' => $tanggal,
                    );
                    $this->M_admin->updatedata('artikel', $data, array(
                        'id_artikel' => $id
                    ));
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Dat Berhasil Di Edit</span>');
                    redirect(base_url('admin/artikel'));
                } else {
                    $this->session->set_flashdata('pesan', $this->upload->display_errors('<span class="callout text-success callout-danger">', '</span>'));
                    redirect(base_url('admin/artikel'));
                }
            }
        } else {
            $x['judul'] = "Edit Artikel";
            $this->load->view('admin/header', $x);
            $this->load->view('admin/artikel_edit');
            $this->load->view('admin/footer');
        }
    }

    public function artikel_hapus($id)
    {
        cek_session('admin');
        $query = $this->M_admin->select_where('artikel', 'id_artikel', $id);
        $row = $query->row();
        if ($row->gambar != "") {
            unlink('./rn/gambar/' . $row->gambar);
        } else {
        }

        $this->db->delete("artikel", array(
            'id_artikel' => $id
        ));
        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus</span>');
        redirect(base_url('admin/artikel'));
    }

    // end fungsi dari artikel
    // fungsi dari halaman

    public function halaman()
    {
        if (isset($_POST['tambah'])) {
            $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['upload_path'] = './rn/img/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size'] = '4048'; //maksimum besar file 2M
            $config['file_name'] = $nmfile; //nama yang terupload nantinya
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($_FILES['gambar']['name']) {
                if ($this->upload->do_upload('gambar')) {
                    $gbr = $this->upload->data();
                    $gambar = $gbr['file_name'];
                    $data = array(
                        'judul' =>  $this->input->post('judul'),
                        'isi' =>  $this->input->post('isi'),
                        'id_user' => $this->session->userdata('id_user'),
                        'tanggal' => date("Y-m-d"),
                        'gambar' => $gambar
                    );
                    $this->M_admin->insertdata('halaman', $data);
                    redirect(base_url('admin/halaman'));
                } else {
                    echo  $this->upload->display_errors();
                }
            }
        } elseif (isset($_POST['edit'])) {
            $id = $this->input->post('id');
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Kesalahan URI </span>');
                redirect('admin/halaman');
            }
            cek_table('halaman', 'id_halaman', $id);


            $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['upload_path'] = './rn/img/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size'] = '4048'; //maksimum besar file 2M
            $config['file_name'] = $nmfile; //nama yang terupload nantinya
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $data = $this->M_admin->select_where('halaman', 'id_halaman', $id)->result_array();
            $x['judul'] = "Edit Halaman";
            $x['judul_halaman'] = strip_tags($data[0]['judul']);
            $x['isi'] = $data[0]['isi'];
            if ($_FILES['gambar']['name']) {
                // die;
                if ($this->upload->do_upload('gambar')) {
                    $gbr = $this->upload->data();
                    $gambar = $gbr['file_name'];
                    $data = [
                        'judul' =>  $this->input->post('judul'),
                        'isi' =>  $this->input->post('isi'),
                        'id_user' => $this->session->userdata('id_user'),
                        'tanggal' => date("Y-m-d"),
                        'gambar' => $gambar
                    ];
                    $this->db->update('halaman', $data, ['id_halaman' => $id]);
                    redirect(base_url('admin/halaman'));
                }
            } else {
                $data = [
                    'judul' =>  $this->input->post('judul'),
                    'isi' =>  $this->input->post('isi'),
                    'id_user' => $this->session->userdata('id_user'),
                    'tanggal' => date("Y-m-d"),
                ];
                $this->db->update('halaman', $data, ['id_halaman' => $id]);
                redirect(base_url('admin/halaman'));
            }
        } else {
            $x['judul'] = "Data Halaman";
            $x['halaman'] = $this->M_admin->pilih('halaman');
            $this->load->view('admin/header', $x);
            $this->load->view('admin/halaman');
            $this->load->view('admin/footer');
        }
    }


    public function halaman_hapus($id)
    {
        cek_session('admin');
        $this->db->delete('halaman', array(
            'id_halaman' => $id
        ));
        redirect(base_url('admin/halaman'));
    }

    // fungsi dari kategori

    public function kategori()
    {
        if (isset($_POST['tambah'])) {
            // var_dump("lol");
            // die;
            $this->form_validation->set_rules('kategori', 'Kategori', 'required|is_unique[kategori.kategori]');
            if ($this->form_validation->run() == TRUE) {
                $kategori = $this->input->post('kategori');
                $kategori_seo = seo($this->input->post('kategori'));
                $data = array(
                    'kategori' => $kategori,
                    'kategori_seo' => $kategori_seo
                );
                $this->M_admin->insertdata('kategori', $data);
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambahkan </span>');
                redirect(base_url('admin/kategori'));
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<span class="callout text-success callout-danger">', '</span>'));
                redirect(base_url('admin/kategori'));
            }
        } elseif (isset($_POST['edit'])) {
            $id = $this->input->post('id');
            // var_dump($id);
            // die;

            $this->form_validation->set_rules('kategori', 'Kategori', 'required|is_unique[kategori.kategori]');
            if ($this->form_validation->run() == TRUE) {
                $kategori = $this->input->post('kategori');
                $kategori_seo = seo($this->input->post('kategori'));
                $data = array(
                    'kategori' => $kategori,
                    'kategori_seo' => $kategori_seo
                );
                $this->M_admin->updatedata('kategori', $data, ['id_kategori' => $id]);
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambahkan </span>');
                redirect(base_url('admin/kategori'));
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<span class="callout text-success callout-danger">', '</span>'));
                redirect(base_url('admin/kategori'));
            }
        } else {
            cek_session('admin');
            $x['judul'] = "Data Kategori";
            $x['kategori'] = $this->M_admin->pilih('kategori');
            $this->load->view('admin/header', $x);
            $this->load->view('admin/kategori');
            $this->load->view('admin/footer');
        }
    }

    public function kategori_hapus($id)
    {
        cek_session('admin');
        $cek = $this->db->get_where('kategori', ['id_kategori' => $id]);
        if ($id ==  33) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Permintaan Hapus Gagal</span>');
            redirect(base_url('admin/kategori'));
        } elseif ($id == 34) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Permintaan Hapus Gagal</span>');
            redirect(base_url('admin/kategori'));
        } else {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus </span>');
            $this->db->delete('kategori', array(
                'id_kategori' => $id
            ));
            redirect(base_url('admin/kategori'));
        }
    }

    // video

    public function video()
    {
        $x['judul'] = ":: Data Video ::";
        $x['video'] = $this->M_admin->pilih('video');
        $this->load->view('admin/header', $x);
        $this->load->view('admin/video');
        $this->load->view('admin/footer');
    }


    public function video_set($id)
    {
        cek_table('video', 'id_video', $id);
        $cek_video = $this->db->get_where('video', array(
            'id_video' => $id,
            'tampil_depn' => 'Y'
        ));
        if ($cek_video->num_rows() > 0) {
            $array = array(
                'tampil_depn' => 'N',
                'id_video' => $id
            );
            $cek = $this->db->update('video', $array, array('id_video' => $id));
            if ($cek) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Video Yang Anda Pilih Tampil Di Halaman Depan</span>');
                redirect(base_url('admin/video'));
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Gagal Terkoneksi Dengan Data Base.</span>');
                redirect(base_url('admin/video'));
            }
        } else {
            $array = array(
                'tampil_depn' => 'Y',
                'id_video' => $id
            );
            $cek = $this->db->update('video', $array, array('id_video' => $id));
            if ($cek) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Video Yang Anda Pilih Tampil Di Halaman Depan</span>');
                redirect(base_url('admin/video'));
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Gagal Terkoneksi Dengan Data Base.</span>');
                redirect(base_url('admin/video'));
            }
        }
    }
    public   function video_tambah()
    {
        $x['judul'] = "Data Video";
        $x['url'] = "";
        $x['nama'] = "";
        if (isset($_POST['kirim'])) {
            $nama = $this->input->post('nama');
            $url = $this->input->post('url');
            $data = array(
                'nama' => $nama,
                'url' => $url,
                'tanggal' => date("Y-m-d")
            );
            $this->M_admin->insertdata('video', $data);
            redirect(base_url('admin/video'));
        } else {
            $this->load->view('admin/header', $x);
            $this->load->view('admin/video_form');
            $this->load->view('admin/footer');
        }
    }

    /*bagian data download*/
    public

    function download($aksi = "", $id = "")
    {
        if ($aksi == "add") {
            if (isset($_POST['kirim'])) {
                $namafile = "01" . time();
                $config['upload_path'] = './rn/download/';
                $config['allowed_types'] = 'zip|doc|docx|pdf|';
                $config['file_name'] = $namafile;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('gambar')) {
                    $sqlData = array(
                        'nama_file' => $this->upload->file_name,
                        'tanggal_upload' => date("Y-m-d"),
                        'judul_file' => $this->input->post("judul_file"),
                        'id_admin' => $this->session->userdata('id_user')
                    );
                    $cek = $this->db->insert('download', $sqlData);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Download Berhasil Tambahkan</span>');
                        redirect(base_url('admin/download'));
                    } else {
                        buat_alert("SQL ERROR");
                    }
                } else {
                    buat_alert($this->upload->display_errors());
                }
            } else {
                $x['nama_file'] = "";
                $x['tanggal_upload'] = "";
                $x['judul_file'] = "";
                $x['judul'] = "Tambah Download";
                $x['download'] = "";
                $x['aksi'] = "tambah";
                $this->load->view('admin/header', $x);
                $this->load->view('admin/download_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "edit") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Uri Segment Salah</span>');
                redirect(base_url('admin/download'));
                exit();
            };
            cek_table('download', 'id_download', $id);
            if (isset($_POST['kirim'])) {
                $namafile = "01" . time();
                $config['upload_path'] = './rn/download/';
                $config['allowed_types'] = 'zip|doc|docx|pdf|';
                $config['file_name'] = $namafile;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('gambar')) {
                    $Tdata = $this->db->get_where('download', array(
                        'id_download' => $id
                    ));
                    @unlink("./rn/download/" . $Tdata->row()->nama_file);
                    $sqlData = array(
                        'judul_file' => $this->input->post("judul_file"),
                        'nama_file' => $this->upload->file_name,
                        'tanggal_upload' => date("Y-m-d"),
                        'id_admin' => $this->session->userdata('id_user')
                    );
                    $cek = $this->db->update('download', $sqlData, array(
                        'id_download' => $id
                    ));
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Download Berhasil Tambahkan</span>');
                        redirect(base_url('admin/download'));
                    } else {
                        buat_alert("SQL ERROR");
                    }
                } else {
                    buat_alert("Format gambar Salah");
                }
            } else {
                $SQL = $this->db->get_where('download', array(
                    'id_download' => $id
                ));
                $x['judul'] = "Edit Download";
                $x['nama_file'] = strip_tags($SQL->row()->nama_file);
                $x['tanggal_upload'] = $SQL->row()->tanggal_upload;
                $x['judul_file'] = strip_tags($SQL->row()->judul_file);
                $x['aksi'] = "edit";
                $this->load->view('admin/header', $x);
                $this->load->view('admin/download_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "delete") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Uri Segment Salah</span>');
                redirect(base_url('admin/download'));
                exit();
            };
            $Tdata = $this->db->get_where('download', array(
                'id_download' => $id
            ));
            @unlink("./rn/download/" . $Tdata->row()->nama_file);
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Download Berhasil Tambahkan</span>');
            redirect(base_url('admin/download'));
        } else {
            $x['judul'] = "Data Download";
            $x['download'] = $this->db->get_where('download', array(
                'id_admin' => $this->session->userdata('id_user')
            ));
            $this->load->view('admin/header', $x);
            $this->load->view('admin/download');
            $this->load->view('admin/footer');
        }
    }

    public

    function video_edit($id)
    {
        $vdo = $this->M_admin->select_where('video', 'id_video', $id)->result_array();
        $x['judul'] = "Edit Video";
        $x['url'] = $vdo[0]['url'];
        $x['nama'] = $vdo[0]['nama'];
        if (isset($_POST['kirim'])) {
            $nama = $this->input->post('nama');
            $url = $this->input->post('url');
            $data = array(
                'nama' => $nama,
                'url' => $url,
                'tanggal' => date("Y-m-d")
            );
            $this->M_admin->insertdata('video', $data);
            redirect(base_url('admin/video'));
        } else {
            $this->load->view('admin/header', $x);
            $this->load->view('admin/video_form');
            $this->load->view('admin/footer');
        }
    }

    public

    function video_hapus($id)
    {
        $this->hak_akses();
        $this->db->delete('video', array(
            'id_video' => $id
        ));
        redirect(base_url('admin/video'));
    }

    public

    function seting()
    {
        $this->hak_akses();
        $row = $this->m_admin->setting();
        $x = array(
            'judul' => 'Identitas Kampus',
            'button' => 'Update',
            'action' => base_url('admin/setting_edit'),
            'id_setting' => set_value('id_setting', $row->id_setting),
            'Nama' => set_value('Nama', $row->Nama),
            'gambar_header' => set_value('gambar_header', $row->gambar_header),
            'kunci' => set_value('kunci', $row->kunci),
            'addsense' => set_value('addsense', $row->addsense),
            'deskripsi' => set_value('deskripsi', $row->deskripsi),
            'fans_page' => set_value('fans_page', $row->fans_page),
            'map_google' => set_value('map_google', $row->map_google),
            'verfication' => set_value('verfication', $row->verfication),
            'favicon' => set_value('favicon', $row->favicon),
            'logo' => set_value('logo', $row->logo),
            'alamat' => set_value('alamat', $row->alamat),
            'telepone' => set_value('telepone', $row->telepone),
            'email' => set_value('email', $row->email),
            'nama_rektor' => set_value('nama_rektor', $row->nama_rektor),
            'video_profil' => set_value('video_profil', $row->video_profil),
            'tentang_universitas' => set_value('tentang_universitas', $row->tentang_universitas),
        );

        $this->load->view('admin/header', $x);
        $this->load->view('admin/seting');
        $this->load->view('admin/footer');
    }

    public

    function setting_edit($id = '')
    {

        if ($_FILES['favicon']['name'] == '' and $_FILES['favicon']['name'] == '') {

            $data = array(
                'Nama' => $this->input->post('Nama', TRUE),
                'gambar_header' => $this->input->post('gambar_header', TRUE),
                'kunci' => $this->input->post('kunci', TRUE),
                'addsense' => $this->input->post('addsense', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'fans_page' => $this->input->post('fans_page', TRUE),
                'map_google' => $this->input->post('map_google', TRUE),
                'verfication' => $this->input->post('verfication', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'telepone' => $this->input->post('telepone', TRUE),
                'email' => $this->input->post('email', TRUE),
                'nama_rektor' => $this->input->post('nama_rektor', TRUE),
                'video_profil' => $this->input->post('video_profil', TRUE),
                'tentang_universitas' => $this->input->post('tentang_universitas', TRUE),
            );

            $this->db->update('setting', $data, array('id_setting' => 1));
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(base_url('admin/seting'));
        } else {
            $error = array();
            $namafile = array();
            foreach ($_FILES as $file => $val) {
                $cn['upload_path'] = 'rn/home/img/';
                $cn['allowed_types'] = 'png|jpg|jpeg|bmp';
                $this->upload->initialize($cn);
                if ($this->upload->do_upload($file)) {
                    $namafile[] = $this->upload->file_name;
                } else {
                    $this->session->set_flashdata('pesan', $this->upload->display_errors('<span class="text-danger">', '</span>'));
                    redirect(base_url('admin/seting'));
                    exit();
                }
            }
            $cek = $this->db->get_where('setting', array('id_setting' => 1))->row_array();
            // @unlink('rn/home/img/' . $cek['logo']);
            // @unlink('rn/home/img/' . $cek['favicon']);

            $favicon = ($namafile[0]) ? $namafile[0] : '';
            $logo   = ($namafile[1]) ? $namafile[1] : '';
            $data = array(
                'Nama' => $this->input->post('Nama', TRUE),
                'gambar_header' => $this->input->post('gambar_header', TRUE),
                'kunci' => $this->input->post('kunci', TRUE),
                'addsense' => $this->input->post('addsense', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'fans_page' => $this->input->post('fans_page', TRUE),
                'map_google' => $this->input->post('map_google', TRUE),
                'verfication' => $this->input->post('verfication', TRUE),
                'favicon' => $favicon,
                'logo' => $logo,
                'alamat' => $this->input->post('alamat', TRUE),
                'telepone' => $this->input->post('telepone', TRUE),
                'email' => $this->input->post('email', TRUE),
                'nama_rektor' => $this->input->post('nama_rektor', TRUE),
                'video_profil' => $this->input->post('video_profil', TRUE),
                'tentang_universitas' => $this->input->post('tentang_universitas', TRUE),
            );

            $this->db->update('setting', $data, array('id_setting' => 1));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(base_url('admin/seting'));
        }
    }
    /* bagian slider*/
    public function slider($aksi = '', $id = '')
    {
        cek_session('admin');
        if (isset($_POST['add'])) {
            if (isset($_POST['add'])) {
                $nmfile = "file_" . time();
                $config['upload_path'] = './rn/slider/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                // $config['max_width']            = 1882;
                // $config['max_height']           = 400;
                $config['file_name'] = $nmfile;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('slider')) {
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                        'url' => $this->input->post('url'),
                        'gambar' => $this->upload->file_name,
                        'tanggal_upload' => date("Y-m-d")
                    );
                    $cek = $this->db->insert('slider', $data);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<span class="text-success">Slider Berhasil di Tambah</span>');
                        redirect(base_url('admin/slider'));
                    } else {
                        buat_alert("sql Eror");
                    }
                } else {
                    buat_alert($this->upload->display_errors());
                }
            } else {
                $y['as'] = "";
                $y['isi'] = "";
                $y['url'] = "";
                $y['gambar'] = "";
                $y['aksi'] = "tambah";
                $y['tanggal_upload'] = "";
                $y['judul'] = "Tambah Data Slide Show";
                $this->load->view('admin/header', $y);
                $this->load->view('admin/slider_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "edit") {

            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<div class="text-danger">Uri error Sistem Tidak Dapat Mengenali URL</div>');
                redirect(base_url('admin/slider'));
            };
            cek_uri('slider', 'id_slider', $id);
            $data_slider = $this->db->get_where('slider', array(
                'id_slider' => $id
            ));
            if (isset($_POST['kirim'])) {
                if (empty($_FILES['slider']['name'])) {
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                        'url' => $this->input->post('url'),
                        'tanggal_upload' => date("Y-m-d")
                    );
                    $cek = $this->db->update('slider', $data, ['id_slider' => $id]);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<span class="text-success">Slider Berhasil Di Tambahkan</span>');
                        redirect(base_url('admin/slider'));
                    } else {
                        buat_alert("sql Eror");
                    }
                } else {
                    $nmfile = "file_" . time();
                    $config['upload_path'] = './rn/slider/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                    // $config['max_width']            = 1882;
                    // $config['max_height']           = 450;
                    $config['file_name'] = $nmfile;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('slider')) {
                        @unlink("./rn/slider/" . $data_slider->row()->gambar);
                        $data = array(
                            'judul' => $this->input->post('judul'),
                            'isi' => $this->input->post('isi'),
                            'url' => $this->input->post('url'),
                            'gambar' => $this->upload->file_name,
                            'tanggal_upload' => date("Y-m-d")
                        );
                        $cek = $this->db->update('slider', $data, array(
                            'id_slider' => $id
                        ));
                        if ($cek) {
                            $this->session->set_flashdata('pesan', '<span class="text-success">Slider Berhasil Di Edit</span>');
                            redirect(base_url('admin/slider'));
                        } else {
                            buat_alert("sql Eror");
                        }
                    } else {
                        buat_alert('Sistem Tidak Dapat Mengenali File Yang anda Upload');
                    }
                }
            } else {
                $y['isi'] = $data_slider->row()->isi;
                $y['url'] = $data_slider->row()->url;
                $y['gambar'] = $data_slider->row()->gambar;
                $y['aksi'] = "edit";
                $y['tanggal_upload'] = $data_slider->row()->tanggal_upload;
                $y['judul'] = "Edit Data Slide Show";
                $y['as'] = $data_slider->row()->judul;
                $this->load->view('admin/header', $y);
                $this->load->view('admin/slider_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "delete") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">URI Yang Anda Masukan Salah</span>');
                redirect(base_url('admin/slider'));
            };
            $Sql = $this->db->get_where('slider', array(
                'id_slider' => $id
            ));
            @unlink("./rn/slider/" . $Sql->row()->gambar);
            $cek = $this->db->delete('slider', array(
                'id_slider' => $id
            ));
            if ($cek) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus</span>');
                redirect(base_url('admin/slider'));
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-danger callout-info">Data Gagal Di Hapus Tidak Dapa Mengenali Permintaan Yang Anda Inginkan</span>');
                redirect(base_url('admin/slider'));
            }
        } else {
            $y['judul'] = "Data Slider";
            $y['slider'] = $this->db->get('slider');
            $this->load->view('admin/header', $y);
            $this->load->view('admin/slider', $y);
            $this->load->view('admin/footer', $y);
        }
    }

    public function submission()
    {
        $x = [
            'judul' => "User Submission",
            'user' => $this->M_admin->pilih('admin'),
            'submit' => $this->M_admin->submission()
        ];
        $this->load->view('admin/header', $x);
        $this->load->view('admin/submission', $x);
        $this->load->view('admin/footer');
    }
    public function submission_hapus($id)
    {
        $this->db->delete('submission', ['id_submission' => $id]);
        $this->session->set_flashdata('pesan', '<span class=" text-success">Berhasil Hapus</span>');
        redirect(base_url('admin/submission'));
    }



    public function user($value = '')
    {
        $x['judul'] = "Data User Login";
        $x['user'] = $this->M_admin->pilih('admin');
        $this->load->view('admin/header', $x);
        $this->load->view('admin/user');
        $this->load->view('admin/footer');
    }

    public function user_tambah()
    {
        if (isset($_POST['kirim'])) {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            // $this->form_validation->set_rules('level','Level','requreid'); 

            if ($this->form_validation->run() == TRUE) {
                $cek = $this->db->get_where('admin', array(
                    'username' => $this->input->post('username')
                ));
                if ($cek->num_rows() > 0) {
                    $this->session->set_flashdata('pesan', '<div class="text-dangger">Username Telah Di Gunakan Silahkan Pilih Yang Lain</div>');
                    redirect(base_url('admin/user'));
                } else {
                    $SQL = array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input($this->input->post('password')),
                        'level' => $this->input->post('level'),
                        'nama' => $this->input->post('nama')
                    );
                    $this->db->insert('admin', $SQL);
                    $this->session->set_flashdata('pesan', '<div class="text-success">Data Berhasil Di Update</div>');
                    redirect(base_url('admin/user'));
                }
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<div class="text-success">', '</div>'));
                redirect(base_url('admin/user_tambah'));
            }
        } else {
            $x['username'] = "";
            $x['nama'] = "";
            $x['judul'] = "Tambah User";
            $this->load->view('admin/header', $x);
            $this->load->view('admin/user_form');
            $this->load->view('admin/footer');
        }
    }

    public function user_edit($id)
    {
        if (isset($_POST['kirim'])) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            // $this->form_validation->set_rules('level', 'Level', 'requreid');

            if ($this->form_validation->run() == TRUE) {
                $SQL = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input($this->input->post('password')),
                    'level' => $this->input->post('level'),
                    'nama' => $this->input->post('nama')
                );
                $this->db->update('admin', $SQL, array(
                    'id_admin' => $id
                ));
                $this->session->set_flashdata('pesan', '<div class="text-success">Data Berhasil Di Update</div>');
                redirect(base_url('admin/user'));
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<div class="text-success">', '</div>'));
                redirect(base_url('admin/user_edit/' . $id));
            }
        } else {
            $data = $this->db->get_where('admin', array(
                'id_admin' => $id
            ));
            $x['username'] = $data->row()->username;
            $x['nama'] = $data->row()->nama;
            $x['judul'] = "Edit User";
            $this->load->view('admin/header', $x);
            $this->load->view('admin/user_form');
            $this->load->view('admin/footer');
        }
    }

    public function ubah_pass()
    {
        $id = $this->session->userdata('id_user');
        $data = $this->db->get_where('admin', array(
            'id_admin' => $id
        ));
        if (isset($_POST['kirim'])) {
            if ($this->input->post('password') != $this->input->post('password_u')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">Password yang anda entrikan tidak sama</div>');
                redirect(base_url('admin/ubah_pass'));
            } else {
                $SQL = array(
                    'password' => $this->input($this->input->post('password'))
                );
                $this->db->update('admin', $SQL, array(
                    'id_admin' => $id
                ));
                $this->session->set_flashdata('pesan', '<div class="text-success">Data Berhasil Di Update Password Anda' . $this->input->post('password') . '</div>');
                redirect(base_url('admin/ubah_pass'));
            }
        } else {
            $x['judul'] = 'Ubah Password';
            $this->load->view('admin/header', $x);
            $this->load->view('admin/ubah_pass');
            $this->load->view('admin/footer');
        }
    }

    public

    function user_hapus($id)
    {
        if ($this->session->userdata('id_user') == $id) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">Anda Tidak Bisa Menghapus Diri Anda Sendiri</div>');
            redirect(base_url('admin/user'));
        } else {
            $this->db->delete("admin", array(
                'id_admin' => $id
            ));
            redirect(base_url('admin/user'));
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">Data Berhasil Di Hapus</div>');
            redirect(base_url('admin/user'));
        }
    }

    function menu()
    {
        $x['judul']  = "Data Menu Website";
        $x['record'] = $this->db->query("SELECT * FROM menu order by position, urutan");
        $x['halaman'] = $this->db->query("SELECT * from halaman order by id_halaman desc");
        $x['kategori'] = $this->db->query("SELECT * from kategori order by id_kategori DESC");
        $this->load->view('admin/header', $x);
        $this->load->view('admin/menu');
        $this->load->view('admin/footer');
    }

    function menu_simpan()
    {

        $link = $_POST['link'] . $_POST['page'] . $_POST['kategori'];
        if ($_POST['id'] != '') {
            $this->db->query("UPDATE menu SET nama_menu = '" . $_POST['label'] . "', link  = '" . $link . "' where id_menu = '" . $_POST['id'] . "' ");
            $arr['type']  = 'edit';
            $arr['label'] = $_POST['label'];
            $arr['link']  = $_POST['link'];
            $arr['page']  = $_POST['page'];
            $arr['kategori']  = $_POST['kategori'];
            $arr['id']    = $_POST['id'];
        } else {
            $row = $this->db->query("SELECT max(urutan)+1 as urutan FROM menu")->row_array();
            $this->db->query("INSERT into menu VALUES('','0','" . $_POST['label'] . "', '" . $link . "','Ya','Bottom','" . $row['urutan'] . "')");
            $id = $this->db->insert_id();
            $arr['menu'] = '<li class="dd-item dd3-item" data-id="' . $id . '" >
        <div class="dd-handle dd3-handle Bottom">Drag</div>
        <div class="dd3-content"><span id="label_show' . $id . '">' . $_POST['label'] . '</span>
        <span class="span-right">/<span id="link_show' . $id . '">' . $link . '</span> &nbsp;&nbsp; 
        <a href="' . base_url($this->uri->segment(1) . '/posisi_menu/' . $id) . '" style="cursor:pointer"><i class="fa fa-chevron-circle-up text-success"></i></a> &nbsp; 
        <a class="edit-button" id="' . $id . '" label="' . $_POST['label'] . '" link="' . $_POST['link'] . '" ><i class="fa fa-pencil"></i></a> &nbsp; 
        <a class="del-button" id="' . $id . '"><i class="fa fa-trash"></i></a>
        </span> 
        </div>';
            $arr['type'] = 'add';
        }
        print json_encode($arr);
    }

    function simpan_menu()
    {
        $data = json_decode($_POST['data']);
        function parseJsonArray($jsonArray, $parentID = 0)
        {
            $return = array();
            foreach ($jsonArray as $subArray) {
                $returnSubSubArray = array();
                if (isset($subArray->children)) {
                    $returnSubSubArray = parseJsonArray($subArray->children, $subArray->id);
                }

                $return[] = array('id' => $subArray->id, 'parentID' => $parentID);
                $return = array_merge($return, $returnSubSubArray);
            }
            return $return;
        }
        $readbleArray = parseJsonArray($data);

        $i = 0;
        foreach ($readbleArray as $row) {
            $i++;
            $this->db->query("UPDATE menu SET id_parent = '" . $row['parentID'] . "', urutan = '" . $i . "' where id_menu = '" . $row['id'] . "' ");
        }
    }

    function posisi_menu()
    {

        $cek = $this->db->get_where('menu', array('id_menu' => $this->uri->segment(3)))->row_array();
        $posisi = ($cek['position'] == 'Top' ? 'Bottom' : 'Top');
        $data = array('position' => $posisi);
        $where = array('id_menu' => $this->uri->segment(3));
        $this->db->update('menu', $data, $where);
        redirect($this->uri->segment(1) . '/menu');
    }

    function hapus_menu()
    {

        $idm = array('id_menu' => $this->input->post('id'));
        $this->db->delete('menu', $idm);
        $idm = array('id_parent' => $this->input->post('id'));
        $this->db->delete('menu', $idm);
    }



    /*bagian data galeri foto dan kegiatan */
    public

    function galeri($aksi = '', $id = '')
    {
        if ($aksi == "add") {
            if (isset($_POST['kirim'])) {
                $nmfile = "file_" . time();
                $config['upload_path'] = './rn/galeri/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['file_name'] = $nmfile;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('galeri')) {
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'album' => $this->input->post('album'),
                        'foto' => $this->upload->file_name,
                        'tanggal' => date("Y-m-d"),
                        'id_admin' => $this->session->userdata('id_user')
                    );
                    $cek = $this->db->insert('galeri', $data);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<div class="text-success">Slider Berhasil Di Edit</div>');
                        redirect(base_url('admin/galeri'));
                    } else {
                        buat_alert("sql Eror");
                    }
                } else {
                    buat_alert('Sistem Tidak Dapat Mengenali File Yang anda Upload');
                }
            } else {
                $y['aksi'] = "tambah";
                $y['g_judul'] = "";
                $y['album'] = "";
                $y['foto'] = "";
                $y['tanggal'] = "";
                $y['id_admin'] = "";
                $y['judul'] = "Tambah Data Slide Show";
                $this->load->view('admin/header', $y);
                $this->load->view('admin/galeri_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "edit") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<div class="text-success">Uri error Sistem Tidak Dapat Mengenali URL</div>');
                redirect(base_url('admin/galeri'));
            };
            $data_slider = $this->db->get_where('galeri', array(
                'id_galeri' => $id
            ));
            if (isset($_POST['kirim'])) {
                if (empty($_FILES['galeri']['name'])) {
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'album' => $this->input->post('album'),
                        'tanggal' => date("Y-m-d"),
                        'id_admin' => $this->session->userdata('id_user')
                    );
                    $cek = $this->db->update('galeri', $data, ['id_galeri' => $id]);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<div class="text-success">Slider Berhasil Di Tambahkan</div>');
                        redirect(base_url('admin/galeri'));
                    } else {
                        buat_alert("sql Eror");
                    }
                } else {
                    $nmfile = "file_" . time();
                    $config['upload_path'] = './rn/galeri/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                    $config['file_name'] = $nmfile;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('galeri')) {
                        @unlink("./rn/galeri/" . $data_slider->row()->foto);
                        $data = array(
                            'judul' => $this->input->post('judul'),
                            'album' => $this->input->post('album'),
                            'foto' => $this->upload->file_name,
                            'tanggal' => date("Y-m-d"),
                            'id_admin' => $this->session->userdata('id_user')
                        );
                        $cek = $this->db->update('galeri', $data, ['id_galeri' => $id]);
                        if ($cek) {
                            $this->session->set_flashdata('pesan', '<div class="text-success">Slider Berhasil Di Edit</div>');
                            redirect(base_url('admin/galeri'));
                        } else {
                            buat_alert("sql Eror");
                        }
                    } else {
                        buat_alert('Sistem Tidak Dapat Mengenali File Yang anda Upload');
                    }
                }
            } else {
                $y['aksi'] = "edit";
                $y['g_judul'] = $data_slider->row()->judul;
                $y['album'] = $data_slider->row()->judul;
                $y['foto'] = $data_slider->row()->foto;
                $y['tanggal'] = $data_slider->row()->tanggal;
                $y['id_admin'] = $data_slider->row()->id_admin;
                $y['judul'] = "Edit Data Slide Show";
                $this->load->view('admin/header', $y);
                $this->load->view('admin/galeri_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "delete") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">URI Yang Anda Masukan Salah</div>');
                redirect(base_url('admin/galeri'));
            };
            $Sql = $this->db->get_where('galeri', array(
                'id_galeri' => $id
            ));
            @unlink("./rn/slider/" . $Sql->row()->foto);
            $cek = $this->db->delete('galeri', array(
                'id_galeri' => $id
            ));
            if ($cek) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus</div>');
                redirect(base_url('admin/galeri'));
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Gagal Di Hapus Tidak Dapa Mengenali Permintaan Yang Anda Inginkan</div>');
                redirect(base_url('admin/galeri'));
            }
        } else {
            $y['judul'] = "Data Galeri Foto";
            $y['data'] = $this->m_admin->galeri();
            $this->load->view('admin/header', $y);
            $this->load->view('admin/galeri');
            $this->load->view('admin/footer');
        }
    }

    public

    function album($aksi = '', $id = '')
    {
        if ($aksi == "add") {
            if (isset($_POST['kirim'])) {
                $sql = array('nama_album' => $this->input->post('judul_album'));
                $cek = $this->db->insert('album', $sql);
                if ($cek) {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Ditambahkan</div>');
                    redirect(base_url('admin/album'));
                } else {
                    buat_alert('SQL ERROR');
                }
            } else {
                $x['sql_aksi']  = "Tambah";
                $y['album'] = "";
                $y['judul_album'] = "";
                $y['judul'] = "Data Album Foto";
                $y['data'] = $this->db->get('galeri');
                $this->load->view('admin/header', $y);
                $this->load->view('admin/album_form');
                $this->load->view('admin/footer');
            }
        } elseif ($aksi == "edit") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Gagal Di Hapus Tidak Dapa Mengenali Permintaan Yang Anda Inginkan</div>');
                redirect(base_url('admin/album'));
            }
            if (isset($_POST['kirim'])) {
                $sql = array('nama_album' => $this->input->post('judul_album'));
                $cek = $this->db->update('album', $sql, array('id_album' => $id));
                if ($cek) {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Edit</div>');
                    redirect(base_url('admin/album'));
                } else {
                    buat_alert('SQL ERROR');
                }
            } else {
                $sql = $this->db->get_where('album', array('id_album' => $id));
                $x['sql_aksi']  = "Edit";
                $y['judul_album'] = $sql->row()->nama_album;
                $y['judul'] = "Data Album Foto";
                $y['data'] = $this->db->get('galeri');
                $this->load->view('admin/header', $y);
                $this->load->view('admin/album_form', $y);
                $this->load->view('admin/footer', $y);
            }
        } elseif ($aksi == "delete") {
            if (empty($id)) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Gagal Di Hapus Tidak Dapa Mengenali Permintaan Yang Anda Inginkan</div>');
                redirect(base_url('admin/album'));
            };
            $cek = $this->db->delete('album', array('id_album' => $id));
            if ($cek) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus</div>');
                redirect(base_url('admin/album'));
            } else {
            }
        } else {
            $y['judul'] = "Data Album Foto";
            $y['sql'] = $this->db->get('album');
            $this->load->view('admin/header', $y);
            $this->load->view('admin/album', $y);
            $this->load->view('admin/footer', $y);
        }
    }


    public function team($aksi = '', $id = '')
    {


        $team = $this->m_admin->team();
        $x = array(
            'judul' => 'Data Team',
            'team' => $team,
            'jabatan' => $this->db->get('jabatan')
        );
        // var_dump($team->row_array());
        // die;
        if (isset($_POST['tambah'])) {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[team.username]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('nip', 'Nip', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('deskripsi_singkat', 'deskripsi_singkat', 'required');
            if (empty($_FILES['team']['name'])) {
                $this->form_validation->set_rules('team', 'Document', 'required');
            }
            if ($this->form_validation->run() == TRUE) {
                $config['upload_path']  = './rn/team/';
                $config['file_name']    = 'team' . time();
                $config['allowed_types'] = 'jpg|png|jpeg|bmp|';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('team')) {
                    $sql = [
                        'username' => $this->input->post('username'),
                        'password' => $this->input($this->input->post('password')),
                        'nama' => $this->input->post('nama'),
                        'nip' => $this->input->post('nip'),
                        'riwayat_pendidikan' => $this->input->post('riwayat_pendidikan'),
                        'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
                        'foto' => $this->upload->file_name,
                        'jabatan' => $this->input->post('jabatan'),
                        'email' => $this->input->post('email'),
                    ];
                    $cek = $this->db->insert('team', $sql);
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambahkan</span>');
                        redirect(base_url('admin/team'));
                    } else {
                        buat_alert("SQL Tidak Dapat Terhubung Pada Server Yang Anad Maksud");
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<span class="callout text-danger callout-info">Foto Gagal Di Tambahkan</span>');
                    redirect(base_url('admin/team'));
                }
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-danger callout-info">Data Gagal Di Tambahkan</span>');
                $this->load->view('admin/header', $x);
                $this->load->view('admin/team');
                $this->load->view('admin/footer');
            }
        } else {
            $this->load->view('admin/header', $x);
            $this->load->view('admin/team');
            $this->load->view('admin/footer');
        }
    }

    public function team_hapus($id = '')
    {
        if (empty($id)) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Uri Salah Periksa Parameter Yang Anda Kirim</span>');
            redirect(base_url('admin/team'));
        };
        $data = $this->db->get_where('team', array('id_team' => $id));
        unlink('./rn/team/' . $data->row()->foto);
        $cek = $this->db->delete('team', array('id_team' => $id));
        if ($cek) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-warning">Data Berhasil Di Hapus</span>');
            redirect(base_url('/admin/team'));
        } else {
            buat_alert('Gagal SQL Tidak Dapat Merespon Permintaan Anda');
        }
    }
    public function team_edit($id = '')
    {
        cek_table('team', 'id_team', $id);
        if (empty($id)) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Uri Salah Periksa Parameter Yang Anda Kirim</span>');
            redirect(base_url('admin/team'));
        };
        $sql = $this->db->get_where('team', array('id_team' => $id));
        $x = [
            'aksi' => "edit",
            'username' => $sql->row()->username,
            'nama' => $sql->row()->nama,
            'nip' => $sql->row()->nip,
            'riwayat_pendidikan' => $sql->row()->riwayat_pendidikan,
            'deskripsi_singkat' => $sql->row()->deskripsi_singkat,
            'foto' => $sql->row()->foto,
            'jabatan' => $sql->row()->jabatan,
            'email' => $sql->row()->email,
            'fb' => $sql->row()->fb,
            'judul' => "Edit Data User",
            'jabatan_list' => $this->db->get('jabatan')
        ];
        if (isset($_POST['edit'])) {

            if (empty($_FILES['team']['name'])) {
                $sql = [
                    'username' => $this->input->post('username'),
                    'password' => ($this->input->post('password')) ? $this->input($this->input->post('password')) : $sql->row()->password,
                    'nama' => $this->input->post('nama'),
                    'nip' => $this->input->post('nip'),
                    'riwayat_pendidikan' => $this->input->post('riwayat_pendidikan'),
                    'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
                    'jabatan' => $this->input->post('jabatan'),
                    'email' => $this->input->post('email'),
                    'fb' => $this->input->post('fb')
                ];
                $cek = $this->db->update('team', $sql, ['id_team' => $id]);
                if ($cek) {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Edit</span>');
                    redirect(base_url('admin/team'));
                } else {
                    buat_alert("SQL Tidak Dapat Terhubung Pada Server Yang Anad Maksud");
                }
            } else {

                $config['upload_path']  = './rn/team/';
                $config['file_name']    = 'team' . time();
                $config['allowed_types'] = 'jpg|png|bmp|jpeg';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('team')) {
                    $sql = array(
                        'username' => $this->input->post('username'),
                        'password' => ($this->input->post('password')) ? $this->input($this->input->post('password')) : $sql->row()->password,
                        'nama' => $this->input->post('nama'),
                        'nip' => $this->input->post('nip'),
                        'riwayat_pendidikan' => $this->input->post('riwayat_pendidikan'),
                        'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
                        'foto' => $this->upload->file_name,
                        'jabatan' => $this->input->post('jabatan'),
                        'email' => $this->input->post('email'),
                        'fb' => $this->input->post('fb')
                    );
                    $cek = $this->db->update('team', $sql, array('id_team' => $id));
                    if ($cek) {
                        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Edit</span>');
                        redirect(base_url('admin/team'));
                    } else {
                        buat_alert("SQL Tidak Dapat Terhubung Pada Server Yang Anad Maksud");
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">GAGAL..!</span>');
                    redirect(base_url('admin/team'));
                }
            }
        } else {
            $this->load->view('admin/header', $x);
            $this->load->view('admin/team_edit');
            $this->load->view('admin/footer');
        }
    }

    public function profil()
    {
        if (isset($_POST['kirim'])) {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == TRUE) {

                $sql = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input($this->input->post('password')),
                    'nama' => $this->input->post('nama'),
                );
                $cek = $this->db->update('admin', $sql, array('id_admin' => $this->session->userdata('id_user')));
                if ($cek) {
                    $this->session->set_flashdata('pesan', '<div class="text-success">Data Berhasil Di Update Username <h4>' . $this->input->post('username') . '</h4> Dan Password Anda Adalah <h4>' . $this->input->post('password') . '</h4> Harap username dan Password Di ingat agar login tidak salah</div>');
                    redirect(base_url('admin/profil/'));
                } else {
                }
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<div class="alert alert-danger alert-danger"><i class="fa fa-info"></i>PERHATIAN <tt>', '</tt></div>'));
                redirect(base_url('admin/profil/'));
            }
        } else {

            $x['login'] = $this->db->get_where('admin', array('id_admin' => $this->session->userdata('id_user')));
            $x['judul'] = "Edit Profil";
            $this->load->view('admin/header', $x);
            $this->load->view('admin/profil');
            $this->load->view('admin/footer');
        }
    }

    public function url_extern($action = '', $id = '')
    {
        if ($action == 'add') {
            if (isset($_POST['save'])) {
                $x = array(
                    'link' => $this->input->post('link'),
                    'judul' => $this->input->post('judul'),
                    'posisi' => $this->input->post('posisi'),
                );
                $save = $this->db->insert('link_ex', $x);
                if ($save) {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Link Berhasil Di Update</div>');
                    redirect(base_url('admin/url_extern'));
                } else {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Connection Los</div>');
                    redirect(base_url('admin/url_extern'));
                }
            } else {
                $x['form'] = 'y';
                $x['judul'] = "Linke External";
                $x['data'] = "";
                $this->load->view('admin/header', $x);
                $this->load->view('admin/link_extern');
                $this->load->view('admin/footer');
            }
        } elseif ($action == 'edit') {
            cek_table('link_ex', 'id_link', $id);
            cek_session('admin');
            if (isset($_POST['save'])) {

                $x = array(
                    'link' => $this->input->post('link'),
                    'judul' => $this->input->post('judul'),
                    'posisi' => $this->input->post('posisi'),
                );
                $save = $this->db->update('link_ex', $x, array('id_link' => $id));
                if ($save) {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Link Berhasil Di Update</div>');
                    redirect(base_url('admin/url_extern'));
                } else {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Connection Los</div>');
                    redirect(base_url('admin/url_extern'));
                }
            } else {
                $x['form'] = 'y';
                $x['judul'] = "Linke External";
                $x['data'] = $this->db->get_where('link_ex', array('id_link' => $id));
                $this->load->view('admin/header', $x);
                $this->load->view('admin/link_extern');
                $this->load->view('admin/footer');
            }
        } elseif ($action == 'delete') {
            cek_session('admin');
            $cek = $this->db->get_where('link_ex', array('posisi' => 'home'));
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Tidak Dapat Menghapus Data.</div>');
                redirect(base_url('admin/url_extern'));
                exit();
            }
            $save = $this->db->delete('link_ex', array('id_link' => $id));
            if ($save) {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Link Berhasil Di Update</div>');
                redirect(base_url('admin/url_extern'));
            } else {
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Connection Los</div>');
                redirect(base_url('admin/url_extern'));
            }
        } else {
            $x['form'] = 'n';
            $x['judul'] = "Linke External";
            $this->db->select('*');
            $this->db->from('link_ex');
            $this->db->where('posisi != ', 'home');
            $x['data'] = $this->db->get();
            $this->load->view('admin/header', $x);
            $this->load->view('admin/link_extern');
            $this->load->view('admin/footer');
        }
    }

    public function jabatan()
    {
        if (isset($_POST['tambah'])) {
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required|is_unique[jabatan.jabatan]');
            if ($this->form_validation->run() == TRUE) {
                $jabatan = $this->input->post('jabatan');
                $data = array(
                    'jabatan' => $jabatan,
                );
                $this->M_admin->insertdata('jabatan', $data);
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambahkan </span>');
                redirect(base_url('admin/jabatan'));
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<span class="callout text-success callout-danger">Gagal </span>'));
                redirect(base_url('admin/jabatan'));
            }
        } elseif (isset($_POST['edit'])) {
            $id = $this->input->post('id');
            // var_dump($id);
            // die;

            $this->form_validation->set_rules('jabatan', 'jabatan', 'required|is_unique[jabatan.jabatan]');
            if ($this->form_validation->run() == TRUE) {
                $jabatan = $this->input->post('jabatan');
                $jabatan_seo = seo($this->input->post('jabatan'));
                $data = array(
                    'jabatan' => $jabatan,
                );
                $this->M_admin->updatedata('jabatan', $data, ['id' => $id]);
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambahkan </span>');
                redirect(base_url('admin/jabatan'));
            } else {
                $this->session->set_flashdata('pesan', validation_errors('<span class="callout text-success callout-danger">Gagal </span>'));
                redirect(base_url('admin/jabatan'));
            }
        } else {
            cek_session('admin');
            $x['judul'] = "Data Kategori";
            $x['jabatan'] = $this->M_admin->pilih('jabatan');
            $this->load->view('admin/header', $x);
            $this->load->view('admin/jabatan');
            $this->load->view('admin/footer');
        }
    }

    public function jabatan_hapus($id)
    {
        cek_session('admin');
        $cek = $this->db->get_where('kategori', ['id_kategori' => $id]);
        if ($id ==  33) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Permintaan Hapus Gagal</span>');
            redirect(base_url('admin/kategori'));
        } elseif ($id == 34) {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Permintaan Hapus Gagal</span>');
            redirect(base_url('admin/kategori'));
        } else {
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus </span>');
            $this->db->delete('kategori', array(
                'id_kategori' => $id
            ));
            redirect(base_url('admin/kategori'));
        }
    }
    public function keluar()
    {
        $this->session->sess_destroy();
        session_start();
        session_destroy();
        unset($_SESSION['KCFINDER']);
        unset($_SESSION['KCFINDER']['uploadURL']);
        redirect(base_url('treco-admin'));
    }


    /*data widget */
    function ajax_artikel()
    {
        $data_artikel = $this->M_admin->artikel_jumlah();
        $data_halaman = $this->M_admin->jumlah_halaman();

        $row = array();
        $row['name'] = 'Halaman';
        foreach ($data_halaman->result_array() as $halaman) :
            $row['data'][] = $halaman['jumlah'];
        endforeach;

        $row1 = array();
        $row1['name'] = 'Artikel';
        foreach ($data_artikel->result_array() as $artikel) :
            $row1['data'][] = $artikel['jumlah'];
        endforeach;

        $bulan['categories'] = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        $hasil = array();
        array_push($hasil, $row);
        array_push($hasil, $row1);

        $data_bulan = array();
        array_push($data_bulan, $bulan);

        $json = array(
            'series' => $hasil,
            'xAxis' => $data_bulan
        );
        echo json_encode($json, JSON_NUMERIC_CHECK);
    }
    function uploadFile()
    {
        $file = $_FILES['upload']['name'];
        $file_ext = pathinfo($file, PATHINFO_EXTENSION);
        $nmfile = "file_" . time();
        $config['upload_path'] = './rn/upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        // $config['max_width']            = 1882;
        // $config['max_height']           = 450;
        $config['file_name'] = $nmfile;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $url = "" . base_url() . "rn/upload/" . $nmfile . "." . $file_ext . "";
        if ($this->upload->do_upload('upload')) {
            $jsondata = array('uploaded' => 1, 'fileName' => $nmfile, 'url' => $url);
            echo json_encode($jsondata);
        } else {
            var_dump('gagal');
        }
    }




    // product
    public function product()
    {
        if (isset($_POST['add'])) {
            $count = count($_FILES['files']['name']);
            $data = [];
            $product_data = [
                'product_name' => $this->input->post('product_name'),
                'product_category' => $this->input->post('product_category'),
                'product_description' => $this->input->post('product_description'),
                'createBy' => $this->session->userdata('id_user')
            ];

            // insert data product
            $product_id =  $this->M_admin->addProduct('product', $product_data);

            for ($i = 0; $i < $count; $i++) {
                if (!empty($_FILES['files']['name'][$i])) {
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                    $config['upload_path'] = './rn/product/image/'; //path folder
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                    $config['max_size'] = '5000'; // max_size in kb
                    $config['file_name'] = "" . $product_id . "-" .  $this->input->post('product_name') . "-" . ($i + 1) . "";

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('file')) {
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
                        $data['totalFiles'][] = $filename;

                        // insert image product
                        $this->M_admin->add_product_image($product_id, $filename);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
            }
            $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambah</span>');
            redirect(base_url('admin/product'));

            // $nmfile = "product_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
            // $config['upload_path'] = './rn/product/image/'; //path folder
            // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            // $config['max_size'] = '4048'; //maksimum besar file 2M
            // $config['file_name'] = $nmfile; //nama yang terupload nantinya
            // $this->load->library('upload', $config);
            // $this->upload->initialize($config);
            // if ($_FILES['product_image']['name']) {
            //     if ($this->upload->do_upload('product_image')) {
            //         $gbr = $this->upload->data();
            //         $gambar = $gbr['file_name'];
            //         $product_name = $this->input->post('product_name');
            //         $product_category = $this->input->post('product_category');
            //         $product_description = $this->input->post('product_description');
            //         $createBy = $this->session->userdata('id_user');
            //         $dataProduct = array(
            //             'product_name' => $product_name,
            //             'product_category' => $product_category,
            //             'product_description' => $product_description,
            //             'product_image' => $gambar,
            //             'createBy' => $createBy,
            //         );
            //         $this->M_admin->insertdata('product', $dataProduct);
            //         $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Tambah</span>');
            //         redirect(base_url('admin/product'));
            //     } else {
            //         $this->session->set_flashdata('pesan', $this->upload->display_errors('<span class="callout text-success callout-danger">', '</div>'));
            //         redirect(base_url('admin/product'));
            //     }
            // } else {
            //     $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Gambar Tidak ADA</span>');
            //     redirect(base_url('admin/product'));
            // }
        } else {
            $data = [
                'judul' => "List Product",
                'product' => $this->M_admin->product(),
                'product_category' => $this->db->get('product_category')->result_array(),
            ];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/product');
            $this->load->view('admin/footer');
        }
    }

    function productEdit($product_id = '')
    {
        cek_table('product', 'product_id', $product_id);
        if ($product_id == '') {
            redirect(base_url('admin/product'));
        }
        $product = $this->M_admin->productEdit($product_id);
        $product_images =  $this->M_admin->productImage($product_id);
        $x = [
            'judul' => "Edit Product",
            'aksi' => "edit",
            'product' => $product,
            'product_images' => $product_images,
            'product_category' => $this->db->get('product_category')->result_array()
        ];
        if (isset($_POST['edit'])) {

            $product_name = $this->input->post('product_name');
            $product_category = $this->input->post('product_category');
            $product_description = $this->input->post('product_description');
            $id_user = $this->session->userdata('id_user');


            // var_dump($_FILES['files']['name'][0]);
            // die;
            if (empty($_FILES['files']['name'][0])) {
                $dataProduct = array(
                    'product_name' => $product_name,
                    'product_category' => $product_category,
                    'product_description' => $product_description,
                );
                $query =  $this->M_admin->updatedata('product', $dataProduct, ['product_id' => $product_id]);
                if ($query) {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Edit</span>');
                    redirect(base_url('admin/productEdit/') . $product_id);
                } else {
                    $this->session->set_flashdata('pesan', '<span class="callout text-success callout-danger">Data gagal Di Edit</span>');
                    redirect(base_url('admin/productEdit/') . $product_id);
                }
            } else {
                $count = count($_FILES['files']['name']);
                $data = [];
                for ($i = 0; $i < $count; $i++) {
                    if (!empty($_FILES['files']['name'][$i])) {
                        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['files']['size'][$i];
                        $config['upload_path'] = './rn/product/image/'; //path folder
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                        $config['max_size'] = '5000'; // max_size in kb
                        $config['file_name'] = "" . $product_id . "-" .  $product_name . "-" . ($i + 1) . "";

                        // var_dump("" . $product_id . "-" .  $product_name . "-" . ($i + 1) . "");
                        // die;
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('file')) {
                            $uploadData = $this->upload->data();
                            $filename = $uploadData['file_name'];
                            $data['totalFiles'][] = $filename;

                            // insert image product
                            $this->M_admin->add_product_image($product_id, $filename);
                        } else {
                            echo $this->upload->display_errors();
                        }
                    }
                }
                $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data & foto Berhasil Di Edit</span>');
                redirect(base_url('admin/productEdit/') . $product_id);

                // if ($product['product_image'] != "") {
                //     unlink('./rn/product/img/' . $product['product_image']);
                // } else {
                // }

                // $nmfile = "file_" . time();
                // $config['upload_path'] = './rn/product/image/';
                // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                // $config['max_size'] = '4048';
                // $config['file_name'] = $nmfile; //nama yang terupload nantinya
                // $this->load->library('upload', $config);
                // $this->upload->initialize($config);
                // if ($this->upload->do_upload('product_image')) {
                //     @unlink('./rn/product/image' . $product['product_image']);
                //     $gbr = $this->upload->data();
                //     $gambar = $gbr['file_name'];
                //     $dataProduct = [
                //         'product_name' => $product_name,
                //         'product_category' => $product_category,
                //         'product_description' => $product_description,
                //         'product_image' => $gambar,
                //     ];
                //     $this->M_admin->updatedata('product', $dataProduct, ['product_id' => $id]);
                //     $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Dat Berhasil Di Edit</span>');
                //     redirect(base_url('admin/product'));
                // } else {
                //     $this->session->set_flashdata('pesan', $this->upload->display_errors('<span class="callout text-success callout-danger">', '</span>'));
                //     redirect(base_url('admin/product'));
                // }
            }
        } else {
            $x['judul'] = "Edit Product";
            $this->load->view('admin/header', $x);
            $this->load->view('admin/product_edit');
            $this->load->view('admin/footer');
        }
    }

    public function productImageDelete($image_id, $product_id)
    {
        cek_session('admin');
        $query = $this->M_admin->select_where('product_images', 'id', $image_id);
        $row = $query->row();

        if ($row->image_name != "") {
            unlink('./rn/product/image/' . $row->image_name);
        } else {
        }
        $this->db->delete("product_images", array(
            'id' => $image_id,
            'product_id' => $product_id
        ));
        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus</span>');
        redirect(base_url('admin/productEdit/') . $product_id);
    }
    public function productDelete($id)
    {
        cek_session('admin');
        $query = $this->M_admin->select_where('product', 'product_id', $id);
        $row = $query->row();
        if ($row->gambar != "") {
            unlink('./rn/product/image/' . $row->product_image);
        } else {
        }
        $this->db->delete("product", array(
            'product_id' => $id
        ));
        $this->session->set_flashdata('pesan', '<span class="callout text-success callout-info">Data Berhasil Di Hapus</span>');
        redirect(base_url('admin/product'));
    }



    public function product_category()
    {
        $product_category_name = $this->input->post('product_category_name');
        $product_category_description = $this->input->post('product_category_description');
        $product_category_id = $this->input->post('id');

        if (isset($_POST['add'])) {
        } elseif (isset($_POST['edit'])) {
            if (!empty($_FILES['product_category_image']['name'][0])) {
                $query = $this->db->get_where('product_category', ['product_category_id' => $product_category_id]);

                $nmfile = "product_category_image_" . $product_category_name . "_" . time();

                $config['upload_path'] = './rn/product_category/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['file_name'] = $nmfile;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('product_category_image')) {
                    $product_data = [
                        'product_category_name' => $product_category_name,
                        'product_category_description' => $product_category_description,
                        'product_category_image' => $this->upload->file_name
                    ];
                    unlink('./rn/product_category/' . $query->row()->product_category_image);
                    $query =  $this->M_admin->updatedata('product_category', $product_data, ['product_category_id' => $product_category_id]);
                } else {
                    $this->session->set_flashdata('pesan', $this->upload->display_errors('<span class="callout text-danger callout-danger">', '</div>'));
                }
            } else {
                $product_data = [
                    'product_category_name' => $product_category_name,
                    'product_category_description' => $product_category_description
                ];
                $query =  $this->M_admin->updatedata('product_category', $product_data, ['product_category_id' => $product_category_id]);
                var_dump($product_category_id);
            }
            redirect(base_url('admin/product_category'));
        } else {
            $data = [
                'judul' => "Kategori Produk",
                'product_category' => $this->db->get('product_category')->result_array(),
            ];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/product_category');
            $this->load->view('admin/footer');
        }
    }
}
