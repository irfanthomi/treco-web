
    <div class='row'>
    <div class='col-md-12'>
    <div class='panel panel-info'>
    <div class='panel-heading'><?= ucfirst($judul) ?></div>
    <div class='panel-wrapper collapse in' aria-expanded='true'>
        <div class='panel-body'>
            <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                <div class='form-body'> 
                   ** ) Harap Isikan data yang di butuhkan pada form.
                   <br/ >
                   **) Bagian Ini Tampil Nanti Di Bawah Slider Home
                   <br /><br /><br /><br /> 
                   <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Link<?php echo form_error('link') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Judul<?php echo form_error('judul') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi" class='control-label col-md-3'><b>Isi<?php echo form_error('isi') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
                    </div>
                </div>

                <input type="hidden" name="id_link" value="<?php echo $id_link; ?>" /> 


                <div class='form-actions'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='row'>
                                <div class='col-md-offset-3 col-md-9'>
                                   <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                   <a href="<?php echo base_url('link_ex') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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
