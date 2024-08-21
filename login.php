<?php
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="Select * from `details` where username='$username' and password='$password'";
    $result= mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "Login Successful";
            //$user=1;
            header("Location: index.html");

        }
        else{ 
            echo "Invalid Credentials";
        }
    }            


    
}

?>