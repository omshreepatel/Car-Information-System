<?php
include("userinfo.php");

if (isset($_POST['sign_up'])) {
    $name = htmlentities(mysqli_real_escape_string($con, $_POST["user_name"]));
    $email = htmlentities(mysqli_real_escape_string($con, $_POST["user_email"]));
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST["user_pass"]));

    if ($name == '') {
        echo "<script>alert('We can not verify yourname')</script>";
    }
    if (strlen($pass) < 5) {
        echo "<script>alert('Password should contain 8 character')</script>";
        exit();
    }
    $check_email = "select * from users where user_email = '$email' ";
    $run_email = mysqli_query($con, $check_email);

    $check = mysqli_num_rows($run_email);
    if ($check == 1) {
        echo "<script>alert('Email already exist,please try again')</script>";
        echo "<script>window.open('ProjectCar1.php', '_self')</script>";
        exit();
    }

    $insert = "insert into users (user_name, user_email, user_pass) values ('$name', '$email', '$pass')";

    $query = mysqli_query($con , $insert);
    if($query){
        echo"<script>alert('Congartulation $name, your account has been created successfully')</script>";

        echo "<script>window.open('ProjectCar1.php', '_self')</script>";
    }
    else{
        echo "<script>alert('Registration failed, try again!')</script>";
       echo "<script>window.open('ProjectCar1.php', '_self')</script>";
    }

}