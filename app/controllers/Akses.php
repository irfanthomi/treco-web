<?php

/**
 * 
 */
class Akses extends Rtx_controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_admin');
    if ($this->session->userdata('masuk') == TRUE) {
      redirect(base_url('admin'));
    };
    include APPPATH . 'third_party/password_encp.php';
  }
  public function index()
  {

    $x['judul'] = "LOGIN ADMINISTRATOR";
    if (isset($_POST['login'])) {

      $username = $this->input->post('username');
      $password = $this->input->post('password');


      $username = $this->input->post('username');
      $password = $this->input->post('password');


      $data = $this->M_admin->login($username, $this->input($password));
      $cek = $data->num_rows();
      $data = $data->row();
      if ($cek > 0) {

        $data = array(
          'masuk' => true,
          'id_user' => $data->id_admin,
          'username' => $data->username,
          'nama' => $data->nama,
          'log' => $data->log,
          'level' => $data->level
        );
        $this->session->set_userdata($data);

        session_start();
        $_SESSION['KCFINDER']              = array();
        $_SESSION['KCFINDER']['disabled']  = false;
        $_SESSION['KCFINDER']['uploadURL'] = base_url('asset/file/');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Login Anda Berhasil Silahkan Isi Gunakan Menu Di Samping Mengguanakan Website</div>');
        redirect(base_url('admin'));
      } else {

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login Gagal Username Dan Password Salah</div>');
        redirect(base_url('akses'));
      }
    } else {
      $x['judul'] = "Login Akses Administrator";
      $this->load->view('login', $x);
    }
  }


  // public function lupa_password()
  // {
  //  if (isset($_POST['kirim'])) {
  //   $email=mysql_real_escape_string($this->input->post('email'));
  //   $cari=$this->db->get_where('admin',array('email'=>$email));
  //   if ($cari->num_rows() > 0) {
  //     if ($_POST['cari']) {
  //       if ($this->input->post('pass1') != $this->input->post('pass2')) {

  //         $this->session->set_flashdata('pesan','<div class="alert alert-danger">Password Yang Anda Tida Entrikan Tidak Cocok Silahkan Ulangi</div>');   
  //         redirect(base_url('/Reset-Password.asp?q=True'));   
  //       }else{



  //       }

  //     }else{
  //       $x['depan'] = "N"; 
  //       $x['judul'] = "Reset Password";
  //       $this->load->view('lupa_pass',$x);
  //     }
  //   }else{
  //    $this->session->set_flashdata('pesan','<div class="alert alert-danger">Tidak Ada Email Yang Cocok Dengan Yang Anda Entrikan</div>');   
  //    redirect(base_url('/Reset-Password.asp'));
  //  }

  // }else{
  //   $x['depan'] = "Y"; 
  //   $x['judul'] = "Entrikan Email";
  //   $this->load->view('lupa_pass',$x);
  // }
  // } 


  function reset_pass($req = '', $pin = '')
  {
    if ($req == 'ubah') {

      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $ceks = $this->db->get_where('admin', array('email' => $id));
      $email = $id;
      if ($ceks->num_rows() > 0) {
        if (isset($_POST['ubah'])) {
          $password = $this->input($this->input->post('password'));
          $xs = ['password' => $password];
          $x = $this->db->update('admin', $xs, array('email' => $id));
          if ($x) {
            redirect(base_url('Akses/reset_pass?ts=BR'));
          } else {
            redirect(base_url('Akses'));
          }
        } else {
          $x['awl'] = 'reset';
          $x['judul'] = 'Reset Password Login';
          $this->load->view('lu_pass', $x);
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Email Tidak Cocok Dengan Manapun.</div>');
        redirect(base_url('Akses/reset_pass'));
      }
    } else {

      if (isset($_POST['kirim'])) {

        $cek_pin = $pin;
        $email = $this->input->post('email');
        $cek = $this->db->get_where('admin', array('email' => $email));
        if ($cek->num_rows() > 0) {
          redirect(base_url('Akses/reset_pass/ubah?id=' . $email));
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Email Tidak Cocok Dengan Manapun.</div>');
          redirect(base_url('Akses/reset_pass'));
        }
      } else {
        $x['awl'] = 'email';
        $x['judul'] = 'Reset Password Login';
        $this->load->view('lu_pass', $x);
      }
    }
  }

  public function logout()
  {



    $this->session->sess_destroy();
    session_start();
    session_destroy();

    unset($_SESSION['KCFINDER']);
    unset($_SESSION['KCFINDER']['uploadURL']);


    redirect(base_url('akses'));
  }



  function pass()
  {


    echo crypt('unespadang', 'unespadang');
  }


  private function input($data)
  {
    return crypt($data, 'unespadang');
  }
}
