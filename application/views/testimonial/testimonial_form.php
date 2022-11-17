<div class='row'>
  <div class='col-md-12'>
    <div class='panel panel-info'>
      <div class='panel-heading'><?= ucfirst($judul) ?></div>
      <div class='panel-wrapper collapse in' aria-expanded='true'>
        <div class='panel-body'>
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class='form-horizontal form-bordered'>
            <div class='form-body'> 
             ** ) Harap Isikan data yang di butuhkan pada form.
             <br /><br /><br /><br /> 
             <div class="form-group">
              <label for="isi" class='control-label col-md-3'><b>Isi<?php echo form_error('isi') ?></b></label>

              <div class='col-md-9'>
                <textarea class="form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
              <div class='col-md-9'>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label for="varchar" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>
              <div class='col-md-9'>
                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
              </div>
            </div>
            <div class="form-group">
              <?php if($this->uri->segment(2) == 'edit'): ?>
                <center>
                  <img src="<?= base_url('rn/gambar_tes/'.$gambar) ?>" class="img-responsive" style="width: 200px">
                </center>
              <?php endif; ?>
              <label for="varchar" class='control-label col-md-3'><b>Gambar<?php echo form_error('gambar') ?></b></label>
              <div class='col-md-9'>
                <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Gambar" value="" />
              </div>
            </div>
            <div class="form-group">
              <label for="date" class='control-label col-md-3'><b>Tanggal<?php echo form_error('tanggal') ?></b></label>
              <div class='col-md-9'>
                <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
              </div>
            </div>
            <input type="hidden" name="id_testimonial" value="<?php echo $id_testimonial; ?>" /> 


            <div class='form-actions'>
              <div class='row'>
                <div class='col-md-12'>
                  <div class='row'>
                    <div class='col-md-offset-3 col-md-9'>
                     <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                     <a href="<?php echo base_url('testimonial') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                   </div>
                 </div>
               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
