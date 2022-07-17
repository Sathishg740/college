<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <style>
        body{
            margin:50px 0px;
            padding:50px 600px 500px 600px;
            transform: translate(-50 -50);
  
            align: center;
        }
    </style>
</head>
<body>
<div class="container" >
    <div class="row col-md-15 ">
        <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h1>Registration</h1>
                        </div>
                        <div class="panel-body">
                            <form action="config.php" method="post">
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

                                    <hr class="mb-3">

                                    <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                                </div>
                            </form>
                        </div>
         </div>
    </div>
</div>

</body>