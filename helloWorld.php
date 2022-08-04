<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  echo $name;
  echo $password;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register form</title>
  </head>
  <body>
    
        
        <form action="" method="post" enctype="multipart/form-data" class="container text-center form-control ">
        <h1>Register</h1>   
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" id="">
            </div>
            <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" id="">
            </div>
            <div class="form-group">
            <label for="">Upload File</label>
            <input type="file" name="file" id="">
            <input type="submit" value="submit" name="submit" class="btn btn-success">
</div>

        </form>
      
        
</body>
</html>
