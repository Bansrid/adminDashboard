<?php
require_once('logics/dbconnection.php');
$sqlquery = mysqli_query($conn,"SELECT * FROM contactus");
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<div class="header">
	<?php require_once('includes/navbar.php')?>
	</div>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pt-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Contactus</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Fullname</th>
									<th>Phone-Number</th>
									<th>Email</th>
									<th>message</th>
									<th>created_at</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchRecords = mysqli_fetch_array($sqlquery)) {?>
									<tr>
										<td><?php echo $fetchRecords['no']?></td>
										<td><?php echo $fetchRecords['fullname']?></td>
										<td><?php echo $fetchRecords['phone-number']?></td>
										<td><?php echo $fetchRecords['email']?></td>
										<td><?php echo $fetchRecords['message']?></td>
										<td><?php echo $fetchRecords['created_at']?></td>
										<td>
                                            <a href="edit-enrollment.php?id=<?php echo $fetchRecords['no']?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                    </td>
									</tr>
								<?php }?>
								
							</tbody>
						</table>
					</div>
					<div class="cardfooter"></div>
				</div>
			</div>
		</div>
	</div>
   
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>
              