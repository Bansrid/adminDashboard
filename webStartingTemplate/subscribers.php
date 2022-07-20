<?php
require_once('logics/dbconnection.php');
$sqlsubscribers = mysqli_query($conn,"SELECT * FROM subscribers");
?>
<!DOCTYPE html>
<html> 
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
    <div class="header">
	<?php require_once('includes/navbar.php') ?>
    </div>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
	</div>
    <div class="main-content">
		<div class="container-fluid">
			<div class="row pt-3">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-center text-white">
						<span>subscribers</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style: 12px;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>created_at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php while($fetchsubscriber =mysqli_fetch_array($sqlsubscribers)) { ?>
								<tr>
									<td><?php echo $fetchsubscriber['no']?></td>
									<td><?php echo $fetchsubscriber['email']?></td>
									<td><?php echo $fetchsubscriber['created_at']?></td>
									<td>
                                        <a href="edit-subscriber.php?id=<?php echo $fetchsubscriber['no']?>" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="view-subscriber.php?id=<?php echo $fetchsubscriber['no']?>" class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="delete-subscriber.php?id=<?php echo $fetchsubscriber['no']?>" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
								</tr>
								<?php }?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('includes/scripts.php') ?>
</body>
</html>
