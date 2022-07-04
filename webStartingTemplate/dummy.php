<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn = mysqli_connect($server,$username,$password,$database);
$sqlQuery = mysqli_query($conn,"SELECT * FROM enrollment");
$fetchRecords = mysqli_fetch_array($sqlQuery);
//echo $fetchRecords['fullname'].' '.$fetchRecords['email'];
//echo $fetchRecords['phonenumber'];
while ($fetchRecords = mysqli_fetch_array($sqlQuery)){
    # code...
    echo $fetchRecords['fullname'].''.$fetchRecords['email'].'<br>';
}
?>