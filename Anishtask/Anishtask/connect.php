<?php
$username= $_POST['username'];
$password=$_POST['password'];
$cpassword=$_post['cpassword'];
$conn=new mysqli('localhost','root','','sign up');
if($conn->connect_error){
    die(connection failed :'.$conn->connect_error');

}else{
    $stmt=$conn->prepare("insert to sign up (username,password,confirm password) 
    values(?,?,?)");
    $stmt->bind_param("sii",$username,$password,$confirm password);
    $stmt->execute();
    echo "sign up done successfully!";
    $stmt->close();
    $stmt->close();
}
?>