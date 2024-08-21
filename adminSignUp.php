<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql="insert into `registration`(username,password) values('$username', '$password')";
    // $result = mysqli_query($conn,$sql);

    // if($result){
    //     echo "data inserted";

    // }
    // else{
    //     die(mysqli_error());
    // }

    $sql="Select * from `admindetails` where username='$username'";
    $result= mysqli_query($conn,$sql);
    //echo var_dump($result);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "user already exist";
            $user=1;
        }
        else{
            $sql="insert into `admindetails`(username,password) values('$username', '$password')";
            $result = mysqli_query($conn,$sql); 

            if($result){
                    echo "Signup Successful";
                    $success=1;
                    header("Location: admin.html");

            
                }
                else{
                    die(mysqli_error($conn));
                }
        }


    }
}

?>