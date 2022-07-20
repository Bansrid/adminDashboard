<?php
$prompt="";
require_once('logics/dbconnection.php');
$queryUser= mysqli_query($conn,"SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchmessage= mysqli_fetch_array($querymessage))
{
    $id = $fetchmessage['no']
    $fullname= $fetchmessage['fullname'];
    $phonenumber= $fetchmessage['phonenumber'];
    $email= $fetchmessage['email'];
    $message= $fetchmessage['message'];
    $created-at= $fetchmessage['created-at'];
}
//update user records
if(isset ($_POST['updatemessage']))
{
    //fetch form data
    $name = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $emailaddress= $_POST['email'];
    $message = $_POST['message'];
    //update records
    $updateQuery = mysqli_query($conn,"UPDATE contactus SET fullname='$name',phonenumber='$phone',email='$emailaddress',message='$message' 
    WHERE no='".$_GET['id']."'"); 
    if($updateQuery)
    {
        $prompt="Data captured";
        header('location:contactus.php');
    }
    else{
        $prompt= "Error occured";
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
                            <h4>Edit message: <?php echo $prompt?></h4>
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
                <label for="message" class="form-label"><b>Message:</b></label>
                <input type="message" value="<?php echo $message ?>" class="form-control" name="message" placeholder="Enter your message">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit"name="updatemessage" class="btn btn-primary at-5">update message</button>
                </div>
            </div>        
     </form>
     </div>
		</div>
	</div>
	<?php require_once('includes/scripts.php') ?>
</body>
</html>
	