<?php
include "db.php";
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $user_id=$_POST['user_id'];
    $age=$_POST['age'];
    $city=$_POST['city'];

   $sql="UPDATE `user` SET `name`='$name',`age`='$age',`city`='$city' WHERE ID='$user_id'";
    $result=$con->query($sql);

    if($result == TRUE ){
        echo "Record Updated Successfully";
    }else{
       echo "Error:".$sql."<br>".$con->error;
    }

}
if(isset($_GET['id'])){
 $user_id=$_GET['id'];

    $sql="SELECT * FROM user WHERE id='$user_id'";
    $result=$con->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $name=$row['name'];
        $age=$row['age'];
        $city=$row['city'];
        $id=$row['id'];
    }
    ?>
    <div class="text-center mb-4">
    <h1>Register</h1>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-3 mr-2" >
               <input class="form-control" type="text" name="name" value="<?php echo $name;?>">
            </div>
            <input type="hidden" name="user_id" value="<?php echo $id;?>">
            <div class="col-3 mr-2">
              <input class="form-control" type="text" name="age" value="<?php echo $age;?>">
            </div>
            <div class="col-3 mr-2">
              <input class="form-control" type="text" name="city" value="<?php echo $city;?>">
            </div>
            <div class="col mr-2">
        <input class="btn btn-outline-primary" type="submit" name="update" value="update">
        </div>
</div>  
<a href="index.php">Home</a>
    </form>
    <?php
}
}else{
     header("location:index.php");

}

?>