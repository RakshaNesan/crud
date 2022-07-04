<?php 
include("db.php");
$sql="SELECT * FROM user";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <div class="text-center mb-4">
    <h1>Register</h1>
</div>
    <form action="insert.php" method="post">
        <div class="row">
            <div class="col-3 mr-2" >
               <input class="form-control" type="text" name="name" placeholder="name">
            </div>
            <div class="col-3 mr-2">
              <input class="form-control" type="text" name="age" placeholder="age">
            </div>
            <div class="col-3 mr-2">
              <input class="form-control" type="text" name="city" placeholder="city">
            </div>
            <div class="col mr-2">
        <input class="btn btn-outline-primary" type="submit">
        </div>
    </form>
    <div class="container">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th></th>
            <th></th>
        </tr>
<tbody>
<?php 
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
?>
<tr> 
    <th><?php echo $row['id'];?></th>
    <th><?php echo $row['name'];?></th>
    <th><?php echo $row['age'];?></th>
    <th><?php echo $row['city'];?></th>
    <th><a class="btn btn-outline-primary" href="update.php?id=<?php echo $row['id'];?>">Edit</a></th>
    <th><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></th>
</tr>
<?php
    }
}
?>

</tbody>
<tr> 
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
</tr>
</table>
</div>
</body>
 <script src="https://kit.fontawesome.com/ab02c285ab.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>