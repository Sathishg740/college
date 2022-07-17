<?php
        require("Admin Panel.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mycss.css" type="text/css">
    <script src="https://kit.fontawesome.com/fbc556d750.js" crossorigin="anonymous"></script>
    <style>
        form{
            padding: 10px 650px ;
        }
       .login-form h2{
           text-align:center;
           padding: auto;
       }
    </style>
</head>
<body>
   <div class="login-form">
       <h2>Admin Login Pannel</h2>
       <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
           <div class="innput-field">
               <i class="fas fa-user"></i>
               <input type="text" placeholder="Admin Name" name="AdminName">                                                                                                                                        
           </div>
           <br>
           <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="AdminPassword">
           </div>
            <br>
           <button type="submit" name="Signin">Sign In</button>
            
          
       </form>

   </div>
     <?php

            function input_filter($data){
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            if(isset($_POST['Signin'])){
                $AdminName=input_filter($_POST['AdminName']);
                $AdminPassword=input_filter($_POST['AdminPassword']);
                $AdminName=mysqli_real_escape_string($con,$AdminName);
                $AdminPassword=mysqli_real_escape_string($con,$AdminPassword);

                $query="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";

                if($stmt=mysqli_prepare($con,$query)){
                   mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPassword);
                   mysqli_stmt_execute($stmt);
                   mysqli_stmt_store_result($stmt);

                   if(mysqli_stmt_num_rows($stmt)==1){
                      session_start();
                      $_SESSION['AdminLoginId']=$AdminName;
                      header("location: Admin Panel.php");
                   }else{
                       echo "<script>alert('invalid');</script>";
                   }
                   mysqli_stmt_close($stmt);
                }else{
                    echo "<script>alert('not prepared');</script>";
                }

                

            }
     ?>


</body>
</html>

