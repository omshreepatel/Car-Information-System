<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection Successful";
} else{
    echo"No Connection";
}
mysqli_select_db($con , 'carinfo');
 
$subsemail = $_POST['subsemail'];
 

$query = " insert into subscribe (subsemail)
values ('$subsemail' )";

/* echo"$query";*/

mysqli_query($con, $query); 
if($query == true){
    $message = 'Success';
}
else{
    echo ''.mysql_error();
}
header('location:ProjectCar.php');

?>