<?php
//database connection//
require_once('logics/dbconnection.php');
$sqlFetchStudent=mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no ='".$_GET['id']."'");
while($sqlFetchStudentrecords=mysqli_fetch_array($sqlFetchStudent))
{
    $fullname =$sqlFetchStudentrecords['fullname'];
    $phone =$sqlFetchStudentrecords['phonenumber'];
    $email =$sqlFetchStudentrecords['email'];
    $gender =$sqlFetchStudentrecords['gender'];
    $course =$sqlFetchStudentrecords['course'];
    $createdat =$sqlFetchStudentrecords['createdat'];
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
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full Name: <span class="float-right badge bg-primary"><?php echo$fullname?></span></li>
                                <li class="list-group-item">Email: <span class="float-right badge bg-secondary"><?php echo$email?></span></li>
                                <li class="list-group-item">Phone number: <span class="float-right badge bg-danger"><?php echo$phone?></span></li>
                            </ul>
                    </div>
		        </div>	
	        </div>
        </div>
        <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Other Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">gender:<span class="float-right badge bg-primary"><?php echo$gender?></span></li>
                                <li class="list-group-item">course:<span class="float-right badge bg-secondary"><?php echo$course?></span></li>
                                <li class="list-group-item">createdat:<span class="float-right badge bg-danger"><?php echo$createdat?></span></li>
                            </ul>
                    </div>
		        </div>	
	        </div>
    </div>
</div>    
<?php require_once('includes/scripts.php') ?>
</body>
</html>

