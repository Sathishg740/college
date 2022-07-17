<?php
 session_start();
 session_regenerate_id(true);
 if(!isset($_SESSION['AdminLoginId'])){
    header("location:admin_conn.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        div.header{
            color: #f0f0f0;
            font-family: poppins;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 0px 60px;
            background-color: black;
        }
        div.header buttons{
            background-color: #fff;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>


</head>
<body>
    <div class="header">
        <h1>Admin Panel-<?php echo $_SESSION['AdminLoginId']?> </h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
             <button type="submit" name="Logout">LOG OUT</button>
        </form>


</div>    
<diV>


<?php

include "admin_conn.php";
error_reporting(0);
$query2="SELECT * FROM admin_login";
$result2=$con->query($query2);


#echo "<tr><th>id</th><th>fname</th><th>lname</th><th>email</th><th>pass</th><th>branch</th></tr>";



if($result2->num_rows >0){
    while($row = $result2->fetch_assoc()){
       
        
        echo "<tr><td>" .$row["id"]."</td></tr>";
    }
}else{
    echo "ijo";
}
?>

</div>
<?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: admin11.php");
    }

?>

<h1>Thank You..............</h1>
</body>
</html>