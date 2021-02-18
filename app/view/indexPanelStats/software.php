<?php
require("view/indexPanelStats/_colors.php");

 $totals = 0;
 foreach ($rowset as $row): 
	$totals = $totals + $row->field2;
 endforeach; ?>

<div class="container">
	<h2>Software</h2>
	<div class="progress">
	
<?php foreach ($rowset as $row): ?>

<div class="progress-bar<?php echo $myColors[$myColorsIndex++] ?>" role="progressbar" style="width: <?php echo (100*$row->field2)/$totals ?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

 <?php 
 endforeach; 
 $myColorsIndex = 1;
 ?>
	
	</div>
	<hr />

<?php foreach ($rowset as $row): ?>

  <div class="row">
    <div class="col-sm-1">
		<div class="progress">
		  <div class="progress-bar<?php echo $myColors[$myColorsIndex++] ?>" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
    <div class="col-sm-4"><?php echo $row->field1 ?></div>
	<div class="col-sm-3"><?php echo $row->field2 ?> (<?php echo (100*$row->field2)/$totals ?>%)</div>
	<div class="col-sm-4"></div>
  </div>

 <?php 
 endforeach; 
 $myColorsIndex = 1;
 ?>



</div>
