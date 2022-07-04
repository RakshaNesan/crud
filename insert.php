<?php
include "db.php";

$name=$_POST["name"];
$age=$_POST["age"];
$city=$_POST["city"];

$sql="INSERT INTO `user`(`name`, `age`, `city`) VALUES ('$name','$age','$city')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:index.php");
} 
else{
    echo "error";
}
?>
