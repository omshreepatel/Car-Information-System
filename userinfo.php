<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection Successful";
} else{
    echo"No Connection";
}
mysqli_select_db($con , 'carinfo');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

$query = " insert into user_info (name,email,subject, comment)
values ('$name','$email','$subject','$comment')";

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