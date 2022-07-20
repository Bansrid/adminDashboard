<?php
//database connection//
require_once('logics/dbconnection.php');
$sqlFetchStudent=mysqli_query($conn,
    "SELECT * FROM subscribers WHERE no ='".$_GET['id']."'");
while($sqlFetchsubscriberrecords=mysqli_fetch_array($sqlFetchsubscriber))
{
    $email =$sqlFetchSubscriberrecords['email'];
    $createdat =$sqlFetchSubscriberrecords['createdat'];
}

?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
    <?php require_once('includes/sidebar.php')?>

	</div>
	<div class="main-content">
    <!-- to mantain the style -->
		<div class="container-fluid">
            <!-- rename the below rows -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Detailed Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Email: <span class="float-right badge bg-primary"><?php echo$email?></span></li>
                                <li class="list-group-item">subscriberd at: <span class="float-right badge bg-success"><?php echo$time?></span></li>
                            </ul>
                    </div>
		        </div>	
	        </div>
        </div>
    </div>
</div>    
<?php require_once('includes/scripts.php') ?>
</body>
</html>
