<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  echo $name;
  echo $password;
?>
<!doctype html>
<html lang="en">
  
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
