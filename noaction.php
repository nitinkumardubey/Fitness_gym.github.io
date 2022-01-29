<?php
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $local=$_POST['local'];

    $conn =new mysqli('localhost','root','','gym_data');
    if($conn->connect_error){
        die('Connection failed :'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into data(name,age,gender,local) values(?,?,?,?)");
        $stmt->bind_param("siss",$name,$age,$gender,$local);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }
?>