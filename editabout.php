<!doctype html>
<html lang="en">
  <head>
    <title>Edit about me</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
        require "connect.php";
      ?>
      <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } 
      ?>
      <?php
        if(isset($_POST["save"])){
            $name=$_POST["name"];
            $dateofbirth=$_POST["dateofbirth"];
            $work=$_POST["work"];
            $hobby=$_POST["hobby"];
            $personslity=$_POST["personslity"];
            $live=$_POST["live"];

            
            $sql_update="UPDATE profile SET name ='$name', dateofbirth ='$dateofbirth', work ='$work',  hobby ='$hobby', live='$live' ,personslity ='$personslity' WHERE id =$id";
            $result1=mysqli_query($conn, $sql_update);

            header("location: index.php");
        }
    ?>
      <?php
      $sql_select= "SELECT * FROM profile WHERE id=$id";
      $result = mysqli_query($conn,$sql_select);
      $rows=mysqli_fetch_array($result);
      ?>
      <form action="" method="POST">
        <label for="">name</label><input class="form-control" type="text" name="name" value="<?php echo $rows['name']; ?>" disabled>
        <label for="">dateofbirth</label><input class="form-control" type="date" name="dateofbirth" value="<?php echo $rows['dateofbirth']; ?>">
        <label for="">work</label><input class="form-control" type="text"name ="work" value="<?php echo $rows['work']; ?>">
        <label for="">hobby</label><input class="form-control" type="text" name="hobby" value="<?php echo $rows['hobby']; ?>">
        <label for="">personslity</label><input class="form-control" type="text"name ="personslity" value="<?php echo $rows['personslity']; ?>">
        <label for="">live</label><input class="form-control" type="text"name ="live" value="<?php echo $rows['live']; ?>">
        
        <input class="btn btn-success" type="submit" name ="save" value ="Save">
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>