       </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2021 <a href="">IDM</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
     
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
 
<script src="<?= base_url('rn/sembunyi/dist/js/jQuery-2.1.4.min.js') ?>"></script>
<script src="<?= base_url('rn/sembunyi/dist') ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('rn/sembunyi/dist') ?>/js/adminlte.min.js"></script>
   <script src="<?= base_url('rn/sembunyi/plugins/jquery/') ?>/jquery-ui.min.js"></script>
<script src="<?= base_url('rn/sembunyi/dist') ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('rn/sembunyi') ?>/plugins/datatables.net-bs/js/jquery.dataTables.min.js"></script> 
<script src="<?= base_url('rn/sembunyi/dist/js/jquery.nestable.js') ?>"></script>
<script src="<?= base_url('rn/sembunyi') ?>/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url('rn/sembunyi/dist/js/responsive.js') ?>"></script>
<script src="<?= base_url('rn/sembunyi') ?>/plugins/datatables.net-bs/js/jquery.slimscroll.min.js"></script>
<script>

  $(function () {

$("#tanggal1").datepicker({
format:'yyyy-mm-dd'
});

$("#tanggal2").datepicker({
  format:'yyyy-mm-dd'
});

$("#tanggal").datepicker({
  format:'yyyy-mm-dd'
});
 

    $('#example1').DataTable({
       'responsive' : true,
    });
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
 