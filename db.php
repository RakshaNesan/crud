<?php
$con=mysqli_connect("localhost","root","","crud");
if($con){
 echo "connected";
}
else{
echo "check your connection";
}
?> 