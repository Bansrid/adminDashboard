<?php
require_once('logics/dbconnection.php');
$sqldeletemessage=mysqli_query($conn,"DELETE FROM contactus WHERE no="'.$_GET['id'].'"");
if($sqldeletemessage)
{
    echo "message deleted";
    header('location:contactus.php');
}
else
{
    echo "Error occured"
}
?>