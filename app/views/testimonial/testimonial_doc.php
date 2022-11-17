 
    <body>
        <h2>Testimonial List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Isi</th>
		<th>Nama</th>
		<th>Keterangan</th>
		<th>Gambar</th>
		<th>Tanggal</th>
		
            </tr><?php
            foreach ($testimonial_data as $testimonial)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $testimonial->isi ?></td>
		      <td><?php echo $testimonial->nama ?></td>
		      <td><?php echo $testimonial->keterangan ?></td>
		      <td><?php echo $testimonial->gambar ?></td>
		      <td><?php echo $testimonial->tanggal ?></td>	
                </tr>
                <?php
            }
            ?>
        