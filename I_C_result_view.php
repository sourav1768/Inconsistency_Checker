<?php $ui = new UI();?>

<div style="text-align:center;">
<h3 style="font-weight:bold">Duplicate Semester Registrations</h3>
</div>T
<!-- $bodyrow=$ui->row()->width(6)->m_width(6)->t_width(6)->open(); -->
<?php
    $row = $ui->row()->open();
    $box = $ui->box()
          ->solid()
          ->uiType('primary')
          ->open();
          $table = $ui->table()->hover()->bordered()
								->sortable()->searchable()->paginated()
							    ->open();
		?>
    <thead>
        <tr>
            <th>Sl No.</th>
            <th>Admission No.</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Semester</th>
        </tr>
    </thead>

    <!-- <?php
       $i=0;
       $total =1;
       // foreach($guest_details as $guest) {
	?>
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td>18JE0467</td>
            <td>B.Tech</td>
            <td>cse</td>
            <td>7</td>
        </tr>
    <?php }
    $table->close();
		$box->close();
		$row->close();
    ?> -->

    <?php
       $i=0;
       $total =count($traffic);

        echo ($total);
       // foreach($guest_details as $guest) {
	?>
     <?php for($i=0;$i<$total;$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
            <td><?= $traffic[$i][admn_no] ?></td>
            <td><?= $traffic[$i][course_id] ?></td>
            <td><?= $traffic[$i][branch_id] ?></td>
            <td><?= $traffic[$i][semester] ?></td>
        </tr>
    <?php }
    $table->close();
		$box->close();
		$row->close();
    ?>
