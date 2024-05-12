<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class ="text-center mt-5">Welcome  <?php echo $_SESSION['username'];?></h1>
    <p class="text-center mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore exercitationem quae praesentium dolor, repellat neque, quaerat eaque libero aut voluptatum reprehend.</p>
    <div class="container mt-5">
    <a href="logout.php" class="btn btn-primary w-100" >Logout</a>
    </div>
       
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>