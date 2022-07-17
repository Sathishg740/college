<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="php/css/bootstrap.min.css" type="text/css">

    <style>
        body{
            margin:50px 0px;
            padding:50px 600px 500px 600px;
            transform: translate(-50 -50);
        }
       
    </style>
</head>

   
<body>
    <nav id="nav" style="text-align: right; padding: 10px 800px; position: absolute;font-size: larger;">
        <a style="text-decoration: none;" href="php/admin11.php">Admin</a>
    </nav>

<div class="container" >
    <div class="row col-md-15">
        <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h1>Registration</h1>
                        </div>
                        <div class="panel-body">
                            <form  method="POST" action="php/config.php">
                                <div class="form-group ">
            
                                    <hr class="mb-3">

                                    <label for="fname"><b>First Name</b></label>
                                    <input class="form-control" type="text" name="fname" required>

                                    <label for="lname"><b>Last Name</b></label>
                                    <input class="form-control" type="text" name="lname" required>

                                    <label for="email"><b>Email Address</b></label>
                                    <input class="form-control" type="email" name="email" required>

                                    <label for="phone"><b>Phone Number</b></label>
                                    <input class="form-control" type="text" name="phone" required>

                                    
                                    <label for="password"><b>Password</b></label>
                                    <input class="form-control" type="password" name="password" required>

                                    <label for="branch"><b>Choose Branch</b></label><br>
                                    <select id="branch " style="width:100%; " name="branch">
                                        <option value="ISE" >Information Science</option>
                                        <option value="CSE" >Computer Science</option>
                                        <option value="MECH" >Mechanical</option>
                                        <option value="BT" >Biotechnology</option>
                                        <option value="CIVIL" >Civil</option>
                                    </select><br>


                                  
                                    
                                   
                                    <hr class="mb-3">

                                    <input class="btn btn-primary" type="submit" name="create" value="Register">
                                </div>
                            </form>
                        </div>
         </div>
    </div>
</div>

</body>
</html>
