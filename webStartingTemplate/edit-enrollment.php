<?php
$message="";
require_once('logics/dbconnection.php');
$queryUser= mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchUser= mysqli_fetch_array($queryUser))
{
    $id = $fetchUser['no']
    $fullname= $fetchUser['fullname'];
    $phonenumber= $fetchUser['phonenumber'];
    $email= $fetchUser['email'];
    $gender= $fetchUser['gender'];
    $course= $fetchUser['course'];
}
//update user records
if(isset ($_POST['updaterecords']))
{
    //fetch form data
    $name = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $emailaddress= $_POST['email'];
    $formgender = $_POST['gender'];
    $formcourse = $_POST['course'];
    //update records
    $updateQuery = mysqli_query($conn,"UPDATE enrollment SET fullname='$name',phonenumber='$phone',email='$emailaddress',gender='$formgender',course='$formcourse' 
    WHERE no='".$_GET['id']."'"); 
    if($updateQuery)
    {
        $message="Data captured";
        header('location:students.php');
    }
    else{
        $message= "Error occured";
    }
}
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit student: <?php echo $message?></h4>
                        </div>
                        <div class="card-body">
                        <form action="edit-enrollment.php" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <label for="fullname" class="form-label"><b>Fullname:</b></label>
                    <input type="text" class="form-control" value= "<?php echo $fullname ?>" name="fullname" placeholder="Enter your full name">
                </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="phonenumber" class="form-label"><b>Phonenumber:</b></label>
                    <input type="tel" class="form-control" value="<?php echo $phonenumber ?>" name ="phonenumber"  placeholder="+2547...">
                </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
                <label for="email" class="form-label"><b>Email address:</b></label>
                <input type="email" value="<?php echo $email ?>" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="gender" class="form-label"><b>What is your gender</b></label>
                    <select class="form-control" name="gender"  aria-label="Default select example">
                        <option <?php $gender?>></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-5 mt-5 col-lg-6">
                    <label for="course" class="form-label"><b>What's your preffered course?</b></label>
                    <select class="form-control" name="course"  aria-label="Default select example">
                        <option value="disable selected"><?php $course ?></option>
                        <option value="Web design">Web design</option>
                        <option value="Web development">Web development</option>
                        <option value="Android">Android</option>
                        <option value="Game development">Game development</option>
                        <option value="Graphic design">Graphic design</option>
                        <option value="Cyber security">Cyber security</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="updaterecords"name="updaterecords" class="btn btn-outline-primary">update records</button>
                </div>
            </div>        
     </form>
     </div>
		</div>
	</div>
	<?php require_once('includes/scripts.php') ?>
</body>
</html>
	