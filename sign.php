<?php

$user=0;
$succes=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "Select * from `studentLogin` where username='$username'";
    $result=mysqli_query($con,$sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $user=1;
        }
        else{
            $sql = "INSERT INTO studentLogin ( username, password)
               VALUES ('$username', '$password')";
               $result=mysqli_query($con,$sql);

               if($result){
               $succes=1;
               header('location:login.php');
               }
                else{
                echo "Some Error".mysqli_error($con);
               }
        } }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
if($user){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong> Opps! <strong> User Already Exits.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($succes){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> Success!</strong> You are Succesfully SignUp.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>
    <div class='container mt-5'>
        <h1>Student SignUp Form</h1>
    <form action="sign.php" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name='username' type="text" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>