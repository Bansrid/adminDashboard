<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	<div class="sidebar">
	    <?php require_once('includes/sidebar.php') ?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row pt-3">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-center text-white">
						<span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-lg-3">
					<div class="card-header bg-dark text-center text-white">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-center text-white">
						<span>Available courses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-center text-white">
						<span>Campus</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-center text-white">
						<span>Users</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right">00</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('includes/scripts.php') ?>
</body>
</html>
	