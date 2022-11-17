<?php
ob_start();
 

function cek_inject($id){
  $array=array('.','#','union','---','--');
   return $hasil=str_replace($array,'', $id);
 }

 function seting($nama){
  $CI =& get_instance();
  $hasil=$CI->db->get_where('setting');
  $output=htmlspecialchars_decode($hasil->row()->$nama); 
  return $output;

 }

  function cekidot_dong()
 {
  echo '<noscript>
   <style type="text/css">.wrapper{display: none;}</style>
         <h1>Silahkan Aktifkan Javascript Pada Browser Untuk Membuka Aplikasi</h1>
  </noscript>';
 }

function cek_uri($id,$uri)
 {
    if (empty($id)) {
        redirect(base_url($uri));
      }
 }

function cek_table($table,$id_table,$id)
{

 $CI =& get_instance();
  if (empty($_SERVER['USER_AGENT'])) {
     $alamat=base_url('');
  }else{
    $alamat=$_SERVER['USER_AGENT'];
  }
   $CI =& get_instance();
   $data=barasiah($id);
   $sql=$CI->db->get_where($table,array($id_table=>$id));
   if ($sql->num_rows() > 0) {
      
   }else{
     admin_template('404','');
     exit();
     $CI->db->close();
   }
}


function barasiah($nilai)
{
 $filter = stripslashes(strip_tags(htmlspecialchars($nilai,ENT_QUOTES)));
    return $filter;
}


function buka_form($link, $id, $aksi){
	echo'<form method="post" action="'.$link.'" class="form-horizontal" enctype="multipart/form-data">
			<input type="hidden" name="id" value="'.$id.'">
			<input type="hidden" name="aksi" value="'.$aksi.'">';
}

function buat_textbox($label, $nama, $nilai, $lebar='4', $tipe="text"){
	echo'<div class="form-group" id="'.$nama.'">
			<label for="'.$nama.'" class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-'.$lebar.'">
			  <input type="'.$tipe.'" class="form-control" name="'.$nama.'" value="'.$nilai.'" >
			</div>
		 </div>';
}

function buat_textarea($label, $nama, $nilai, $class=''){
	echo'<div class="form-group" id="'.$nama.'">
			<label for="'.$nama.'" class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-10">
			  <textarea class="form-control ckeditor" rows="8" name="'.$nama.'">'.$nilai.'</textarea>
			</div>
		 </div>';
}

function buat_combobox($label, $nama, $list, $nilai, $lebar='4'){
	echo'<div class="form-group" id="'.$nama.'">
			<label for="'.$nama.'" class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-'.$lebar.'">
			  <select class="form-control" name="'.$nama.'">';
		foreach($list as $ls){
			$select = $ls['val']==$nilai ? 'selected' : '';
			echo'<option value='.$ls['val'].' '.$select.'>'.$ls['cap'].'</option>';
		}
	echo'	  </select>
			</div>
		 </div>';
}

function buat_checkbox($label, $nama, $list){
	echo'<div class="form-group" id="'.$nama.'">
			<label class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-10">';
		foreach($list as $ls){
			echo' <input type="checkbox" name="'.$nama.'[]" value="'.$ls['val'].'" '.$ls['check'].'> '.$ls['cap'];
		}
	echo'	</div>
		</div>';
}

function buat_radio($label, $nama, $list){
	echo'<div class="form-group" id="'.$nama.'">
			<label class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-10">';
		foreach($list as $ls){
			echo'<label  for="'.$nama.$ls['val'].'" id="label_'.$nama.$ls['val'].'"> 
					<input type="radio" name="'.$nama.'" id="'.$nama.$ls['val'].'" value="'.$ls['val'].'" '.$ls['check'].'> '.$ls['cap'].' 
				</label>';
		}
	echo'	</div>
		</div>';
}


?>
	

<?php
	
function tutup_form($link,$name){
	echo'<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary" name="'.$name.'">
					<i class="glyphicon glyphicon-floppy-disk"></i> Simpan 
				</button>
				<a class="btn btn-warning" href="'.$link.'">
					<i class="glyphicon glyphicon-arrow-left"></i> Batal 
				</a>
			</div>
		</div>
	</form>';
}


 
function buat_alert($pesan){
 echo '<script>alert("'.$pesan.'");window.history.back();</script>';
}


?>
