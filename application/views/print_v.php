<html>
<head>
	<title>Print Out</title>
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css';?>">
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.ico'; ?>" type="image/x-icon">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img src="<?php echo base_url() . 'assets/images/top-banner-drawing.gif'; ?>" class="img-responsive">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<h2 style="text-align:center">Drawing 16 Besar</h2>
		<p style="text-align:center">Indonesia Soccer Championship B</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP A</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group1 as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				
				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP B</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group2 as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP C</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group3 as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<table class="table table-bordered">
					<thead style="background-color: #293a56; color: #ffffff">
						<tr>
							<th width="10%">NO</th>
							<th width="90%">GROUP D</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($group4 as $row) :?>	
						<tr>
							<td><?php echo $row['sort']; ?></td>
							<td><?php echo $row['name']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<p>Copyright &copy; PT. Gelora Trisula Semesta - <?php echo date('Y'); ?></p>
		</div>
	</div>

</div>
</body>
</html>