<?php
session_start();

include("userinfo.php");

    if(isset($_POST['sign_in'])){
        $email = htmlentities(mysqli_real_escape_string($con, $_POST["user_email"]));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST["user_pass"]));

        $select_user = "select * from users where user_email = '$user_email' AND user_pass = '$user_pass'";

        $query = mysqli_query($con, $select_user);
        $check_user= mysqli_num_rows($query);

            if($check_user == 1){
            $_SESSION['user_email']= $user_email;

            $update_msg = mysqli_query($con , "UPDATE users SET login = 'online' WHERE user_email = '$user_email'");

            $user = $_SESSION['user_email'];
            $get_user = "select * from users where user_pass = '$user_pass'";
            $run_user = mysqli_query($con , $get_user);
            $row = mysqli_fetch_array($run_user);

            $user_name = $row['user_name'];

            echo "<script>window.open('ProjectCar1.php?user_name=$user_name', '_self')</script>";

        }
        else{
            echo"
            
            <div class='alert alert-danger'>
                <strong> Check your email and password.</strong>
                
            </div>
            ";

             echo"<script>alert('Check your email and password.')</script>";
             echo "<script>window.open('signin.php', '_self')</script>";
        }
    }


?>
-- <?php
--   session_start();
-- $login = false;
-- $showerr = false;
-- if($_SERVER["REQUEST_METHOD"] == "POST")
-- {
    
--     include 'partial/dbconnect.php';

-- $email = $_POST["email"];
-- $pass = $_POST["pass"];

-- //   $sql = "Select * from signup where email = '$user_email' AND pass = '$pass'";
--   $sql = "Select * from signup where email = '$user_email'";
  
--   $result = mysqli_query($conn , $sql);
--   $num = mysqli_num_rows($result);
--   if($num == 1){
--     while($row = mysqli_fetch_assoc($result)){
--         if(password_verify($password , $row['pass'])){
--         $login = true;
--         session_start();
--         $_SESSION['logged'] = true;
--         $_SESSION['name'] = $name; 
--         $_SESSION['email'] = $email; 
--         header("location: ProjectCar.php");
--         }
--         else{
--             $_SESSION['log'] = "invalid Credentials";
--             header("location: login_user.php");
--         }
--     }
-- } 
-- else{
--     // $showerr = "invalid data";
--     $_SESSION['log'] = "invalid Credentials";
--     header("location: login_user.php");
-- }

-- }
-- ?>