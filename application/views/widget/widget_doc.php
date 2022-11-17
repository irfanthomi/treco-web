 
    <body>
        <h2>Widget List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Parameter</th>
		<th>Nilai</th>
		<th>Bagian</th>
		<th>Tanggal</th>
		
            </tr><?php
            foreach ($widget_data as $widget)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $widget->parameter ?></td>
		      <td><?php echo $widget->nilai ?></td>
		      <td><?php echo $widget->bagian ?></td>
		      <td><?php echo $widget->tanggal ?></td>	
                </tr>
                <?php
            }
            ?>
        