<?php

$connection = mysqli_connect('localhost','root','','wedding');

if(isset($_POST['Send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $request = mysqli_query($connection,"insert into wedding_plan(name,email,phone,address,message) values('$name','$email','$phone','$address','$message')");
    
    header("location:index.php");

}else{
    echo 'something went wrong please try again!';
}

?>


    