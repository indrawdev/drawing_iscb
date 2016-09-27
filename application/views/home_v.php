<script type='text/javascript'>
function startRefresh() {
    $.get('', function(data) {
        $(document.body).html(data);    
    });
}
$(function() {
    setTimeout(startRefresh,2000);
});
</script>

<div class="row"  style="margin-top:20px">
	<div class="col-sm-12">
		<h1 class="title">Drawing 16 Besar</h1>
		<h2 class="title">Indonesia Soccer Championship B</h2>
	</div>
</div>
<hr>
<div class="row">

	<div class="col-xs-6 col-sm-3">
		
		<div class="panel panel-default">
			<div class="panel-heading heading-1"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group A</div>
			<div class="panel-body">
				<ol id="group1" class='simple_with_animation vertical'>
				<?php foreach($group1 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-2"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group B</div>
			<div class="panel-body">
				<ol id="group2" class='simple_with_animation vertical'>
				<?php foreach($group2 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>	
			</div>
		</div>
	</div>

	  <!-- Add the extra clearfix for only the required viewport -->
	<div class="clearfix visible-xs-block"></div>

	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-3"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group C</div>
			<div class="panel-body">
				<ol id="group3" class='simple_with_animation vertical'>
				<?php foreach($group3 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-4"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 Group D</div>
			<div class="panel-body">
				<ol id="group4" class='simple_with_animation vertical'>
				<?php foreach($group4 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>

	<div class="clearfix visible-xs-block"></div>
</div>