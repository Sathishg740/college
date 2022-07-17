<?php 
       
        
        $host="localhost";
        $username="root";
        $dbpassword="";
        $dbname="useraccounts";  

        $conn = mysqli_connect($host,$username ,$dbpassword);

        if(!$conn){
            die("connection failed:" .mysqli_connect_error());
        }else{
            echo "connected";
        }



 

?>