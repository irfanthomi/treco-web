
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-info'>
<div class='panel-heading'><?= ucfirst($judul) ?></div>
<div class='panel-wrapper collapse in' aria-expanded='true'>
<div class='panel-body'>
    <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
        <div class='form-body'> 
           ** ) Harap Isikan data yang di butuhkan pada form.
           <br /><br /><br /><br /> 
           <div class="form-group">
            <label for="parameter" class='control-label col-md-3'><b>Parameter<?php echo form_error('parameter') ?></b></label>

            <div class='col-md-9'>
                <textarea class="form-control" rows="3" name="parameter" id="parameter" placeholder="Parameter"><?php echo $parameter; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="nilai" class='control-label col-md-3'><b>Nilai<?php echo form_error('nilai') ?></b></label>

            <div class='col-md-9'>
                <textarea class="form-control" rows="3" name="nilai" id="nilai" placeholder="Nilai"><?php echo $nilai; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Bagian<?php echo form_error('bagian') ?></b></label>
            <div class='col-md-9'>
              <select class="form-control">
                <?php
                 $arr = array('ckaki'=>'BAGIAN FOOTER','Tengah'=>'BAGIAN TENGAH');
                 $no=1; foreach($arr as $data =>$val):
                  ?>
                <option value="<?= $data ?>" <?php if($bagian == $data){ echo "selected"; }  ?>><?= $val ?></option> 
              <?php $no++; endforeach; ?>
              </select> 
            </div>
        </div>
        <div class="form-group">
            <label for="date" class='control-label col-md-3'><b>Tanggal<?php echo form_error('tanggal') ?></b></label>
            <div class='col-md-9'>
                <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
            </div>
        </div>
        <input type="hidden" name="id_widget" value="<?php echo $id_widget; ?>" />   
        <div class='form-actions'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='row'>
                        <div class='col-md-offset-3 col-md-9'>
                           <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                           <a href="<?php echo base_url('widget') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
                           

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
