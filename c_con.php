

<?php
        
        $name=$POST['name'];
        $email=$POST['email'];
        $msg=$POST['msg'];
    
             //database connection
            $conn=new mysqli('localhost','root','','user');
            if($conn->connect_error){
                die('connection failed:' .$conn->connect_error);

            }else{
                $stmt=$conn->prepare("INSERT INTO `contact`( `name`, `email`, `password`, `msg`) VALUES (?,?,?)");
                $stmt->bind_param("sss",  $name,$email,$msg);
                $stmt->execute();
                echo "registered";
                $stmt->close();
                $conn->close();
            }
?> 
