  <!-- page content -->
  <div class="right_col" role="main">
    <div class="row dashboard_graph">
      <!-- /top tiles -->
      <div class="col-md-8">
      <div class="box-header">
          <h3 class="box-title">Struktur Menu</h3>
        </div><!-- /.box-header -->
        <hr/>
        <div class="box-body">
          <input type="hidden" id="id">
          <div class="dd" id="nestable">
            <?php
            $ref   = [];
            $items = [];
            foreach ($record->result() as $data) {
              $thisRef = &$ref[$data->id_menu];
              $thisRef['id_parent'] = $data->id_parent;
              $thisRef['nama_menu'] = $data->nama_menu;
              $thisRef['link'] = $data->link;
              $thisRef['id_menu'] = $data->id_menu;
              $thisRef['position'] = $data->position;

              if ($data->id_parent == 0) {
                $items[$data->id_menu] = &$thisRef;
              } else {
                $ref[$data->id_parent]['child'][$data->id_menu] = &$thisRef;
              }
            }

            function get_menu($items, $class = 'dd-list')
            {
              $ci = &get_instance();
              $html = "<ol class=\"" . $class . "\" id=\"menu-id\">";
              foreach ($items as $key => $value) {
                if ($value['position'] == 'Top') {
                  $icon = 'down text-danger';
                  $ket = 'Pindah ke Bottom Menu';
                } else {
                  $icon = 'up text-success';
                  $ket = 'Pindah ke Top Menu';
                }
                $html .= '<li class="dd-item dd3-item" data-id="' . $value['id_menu'] . '" >
            <div style="cursor:move" class="dd-handle dd3-handle ' . $value['position'] . '"></div>
            <div class="dd3-content"><span id="label_show' . $value['id_menu'] . '">' . $value['nama_menu'] . '</span> 
            <span class="span-right">/<span class="link-show" id="link_show' . $value['id_menu'] . '">' . $value['link'] . '</span> &nbsp;&nbsp; 
            <a title="' . $ket . '" href="' . base_url($ci->uri->segment(1) . '/posisi_menu/' . $value['id_menu']) . '" style="cursor:pointer"><i class="fa fa-chevron-circle-' . $icon . '"></i></a> &nbsp; 
            <a class="edit-button" id="' . $value['id_menu'] . '" label="' . $value['nama_menu'] . '" link="' . $value['link'] . '" ><i class="fa fa-pencil"></i></a>  &nbsp; 
            <a class="del-button" id="' . $value['id_menu'] . '"><i class="fa fa-trash"></i></a></span> 
            </div>';
                if (array_key_exists('child', $value)) {
                  $html .= get_menu($value['child'], 'child');
                }
                $html .= "</li>";
              }
              $html .= "</ol>";
              return $html;
            }
            print get_menu($items);
            ?>
          </div>
        </div>
        <input type="hidden" id="nestable-output">
      </div>
   


    <div class="col-md-4">
        <div class="box-header">
          <h3 class="box-title">Source Menu URL</h3>
        </div><!-- /.box-header -->
        <hr/>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <tr>
              <td><input class='form-control' type="text" id="label" placeholder="Nama Menu" required></td>
            </tr>
            <tr>
              <td><input type="radio" id="radio1" name='from' value='link' checked> From Link &nbsp;
                <input type="radio" id="radio2" name='from' value='page'> From Page &nbsp;
                <input type="radio" id="radio3" name='from' value='kategori'> From Kategori
              </td>
            </tr>

            <tr>
              <td><input class='form-control link' type="text" id="link" placeholder="http://domain.com/page" autocomplete='off' required>
                <select class='form-control page' type="text" id="page" required>
                  <option value=''>- Page -</option>
                  <?php
                  foreach ($halaman->result_array() as $row) {
                    echo "<option value='halaman/detail/" . $row['id_halaman'] . "/" . seo($row['judul']) . "'>$row[judul]</option>";
                  }
                  ?>
                </select>
                <select class='form-control kategori' type="text" id="kategori" required>
                  <option value=''>- Kategori -</option>
                  <?php
                  foreach ($kategori->result_array() as $row) {
                    echo "<option value='kategori/detail/$row[kategori_seo]'>$row[kategori]</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td><button class='btn btn-sm btn-success' id="submit">Submit</button> <button class='btn btn-sm btn-default' id="reset">Reset</button></td>
            </tr>
          </table>
        </div>
    </div>
  </div>
  </div>

  <script>
    $(document).ready(function() {
      $('.link').show();
      $('.page').hide();
      $('.kategori').hide();
      $('#radio1').change(function() {
        if (this.checked)
          $('.link').fadeIn('slow');
        $('.page').fadeOut('slow').val("");
        $('.kategori').fadeOut('slow').val("");
      });

      $('#radio2').change(function() {
        if (this.checked)
          $('.page').fadeIn('slow');
        $('.link').fadeOut('slow').val("");
        $('.kategori').fadeOut('slow').val("");
      });

      $('#radio3').change(function() {
        if (this.checked)
          $('.kategori').fadeIn('slow');
        $('.page').fadeOut('slow').val("");
        $('.link').fadeOut('slow').val("");
      });
    });

    $(document).ready(function() {
      var updateOutput = function(e) {
        var list = e.length ? e : $(e.target),
          output = list.data('output');
        if (window.JSON) {
          output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
        } else {
          output.val('JSON browser support required for this demo.');
        }
      };

      // activate Nestable for list 1
      $('#nestable').nestable({
          group: 1
        })
        .on('change', updateOutput);

      // output initial serialised data
      updateOutput($('#nestable').data('output', $('#nestable-output')));
      $('#nestable-menu').on('click', function(e) {
        var target = $(e.target),
          action = target.data('action');
        if (action === 'expand-all') {
          $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
          $('.dd').nestable('collapseAll');
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $("#load").hide();
      $("#submit").click(function() {
        $("#load").show();

        var dataString = {
          label: $("#label").val(),
          link: $("#link").val(),
          page: $("#page").val(),
          kategori: $("#kategori").val(),
          id: $("#id").val()
        };

        $.ajax({
          type: "POST",
          url: "<?= base_url('admin/menu_simpan'); ?>",
          data: dataString,
          dataType: "json",
          cache: false,
          success: function(data) {
            if (data.type == 'add') {
              $("#menu-id").append(data.menu);
            } else if (data.type == 'edit') {
              $('#label_show' + data.id).html(data.label);
              $('#link_show' + data.id).html(data.link);
              $('#page_show' + data.id).html(data.page);
              $('#kategori_show' + data.id).html(data.kategori);
            }
            $('#label').val('');
            $('#link').val('');
            $('#page').val('');
            $('#kategori').val('');
            $('#id').val('');
            $("#load").hide();
          },
          error: function(xhr, status, error) {
            alert(error);
          },
        });
      });

      $('.dd').on('change', function() {
        $("#load").show();

        var dataString = {
          data: $("#nestable-output").val(),
        };

        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>admin/simpan_menu",
          data: dataString,
          cache: false,
          success: function(data) {
            $("#load").hide();
          },
          error: function(xhr, status, error) {
            alert(error);
          },
        });
      });

      $(document).on("click", ".pos-button", function() {
        var id = $(this).attr('id');
        $("#load").show();
        $.ajax({
          type: "POST",
          url: "<?= base_url('admin/posisi_menu'); ?>",
          data: {
            id: id
          },
          cache: false,
          success: function(data) {
            $("#load").hide();
          },
          error: function(xhr, status, error) {
            alert(error);
          },
        });
      });

      $(document).on("click", ".del-button", function() {
        var x = confirm('Apa anda yakin untuk hapus Data ini?');
        var id = $(this).attr('id');
        if (x) {
          $("#load").show();
          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/hapus_menu",
            data: {
              id: id
            },
            cache: false,
            success: function(data) {
              $("#load").hide();
              $("li[data-id='" + id + "']").remove();
            },
            error: function(xhr, status, error) {
              alert(error);
            },
          });
        }
      });

      $(document).on("click", ".edit-button", function() {
        var id = $(this).attr('id');
        var label = $(this).attr('label');
        var link = $(this).attr('link');
        $("#id").val(id);
        $("#label").val(label);
        $("#link").val(link);
      });

      $(document).on("click", "#reset", function() {
        $('#label').val('');
        $('#link').val('');
        $('#id').val('');
      });

    });
  </script>