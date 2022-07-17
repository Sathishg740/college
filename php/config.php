<?php
        
             $fname     =$_POST['fname'];
             $lname     =$_POST['lname'];
             $email     =$_POST['email'];
             $phone     =$_POST['phone'];
             $password  =$_POST['password'];
             $branch    =$_POST['branch'];

             //database connection
            $conn=new mysqli('localhost','root','','useraccounts');
            if($conn->connect_error){
                die('connection failed:' .$conn->connect_error);

            }else{
                $stmt=$conn->prepare("INSERT INTO users(fname, lname, email, phone, password,branch) VALUES(?,?,?,?,?,?)");
                $stmt->bind_param("sssiss",$fname,$lname, $email, $phone, $password,$branch);
                $stmt->execute();
                echo "registered";
                $stmt->close();
                $conn->close();
            }
?> 
