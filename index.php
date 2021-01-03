<?php
$host= "localhost";
$user = "root";
$password = "";
$name = "test_db";

$conn = mysqli_connect($host,$user,$password,$name);
if(!$conn){
 die ("not connected");
} else{
    echo "connect successfully <hr>";
}
if(isset($_REQUEST['submit'])){
   if(($_REQUEST['name'] == "") || ($_REQUEST['roll'] == "") || ($_REQUEST['address'] == "")){
       echo "Fill all Required Field";
   }else{
       $name = $_REQUEST['name'];
       $roll = $_REQUEST['roll'];
       $address = $_REQUEST['address'];
       $sql = "insert into students (name,roll,address) VALUES('$name','$roll','$address')";
       if(mysqli_query($conn,$sql)){
           echo " New rocord Inserted Successfully";

       }else{
           echo "Not Insert";
       }
   }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class="col-sm-4">
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="roll">Roll</label>
        <input type="text" class="form-control" name="roll">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address">
      </div><br>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

