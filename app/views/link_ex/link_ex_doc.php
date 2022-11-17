 
    <body>
        <h2>Link_ex List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Link</th>
		<th>Judul</th>
		<th>Isi</th>
		<th>Posisi</th>
		
            </tr><?php
            foreach ($link_ex_data as $link_ex)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $link_ex->link ?></td>
		      <td><?php echo $link_ex->judul ?></td>
		      <td><?php echo $link_ex->isi ?></td>
		      <td><?php echo $link_ex->posisi ?></td>	
                </tr>
                <?php
            }
            ?>
        