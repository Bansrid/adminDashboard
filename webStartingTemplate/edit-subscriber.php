<?php
$prompt="";
require_once('logics/dbconnection.php');
$queryUser= mysqli_query($conn,"SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while($fetchsubscriber= mysqli_fetch_array($querysubscriber))
{
    $id = $fetchsubscriber['no'];
    $email= $fetchsubscriber['email'];
    $created_at= $fetchsubscriber['created_at']
}
//update user records
if(isset ($_POST['updatesubscriber']))
{
    //fetch form data
    $emailaddress= $_POST['email'];
    //update records
    $updateQuery = mysqli_query($conn,"UPDATE subscribers SET email='$emailaddress'
    WHERE no='".$_GET['id']."'"); 
    if($updateQuery)
    {
        $prompt="Data captured";
        header('location:subscribers.php');
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
                            <h4>Edit subscriber: <?php echo $prompt?></h4>
                        </div>
                        <div class="card-body">
                        <form action="edit-subscriber.php?id=<?php echo $id?>" method="POST">
          <div class="row">
            <div class="col-lg-6">
                <label for="email" class="form-label"><b>Email address:</b></label>
                <input type="email" value="<?php echo $email ?>" class="form-control" name="email" placeholder="Enter your email">
          </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit"name="updatesubscriber" class="btn btn-primary mt-5">update subsriber</button>
                </div>
            </div>        
     </form>
     </div>
		</div>
	</div>
	<?php require_once('includes/scripts.php') ?>
</body>
</html>
	