<?php 
include "connection.php";

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $y_course = $_POST['y_course'];

  $add_student = $conn->prepare("INSERT INTO `students`(name,age,y_course) VALUES (?,?,?)");
  $add_student->execute([$name, $age, $y_course]);

  header ('location: read.php');
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD Example</title>
  </head>
  <body>
    <h1 class="text-center">Add data</h1>
    <form action="" method="post">
        <div class="button">
            <input type="submit" value="Add student" name="submit" class="btn btn-primary mb-2">
            <a href="read.php" class="btn btn-warning mb-2">View Students</a>
        </div>
        <div class="form-group">
            <div class="row">
                <label for="">Student Name : </label>
                <input type="text" name="name" class="form-control" placeholder: Enter student name..>
            </div>
            <div class="row">
                <label for="">Student Age : </label>
                <input type="number" name="age" class="form-control" placeholder: Enter student age..>
            </div>
            <div class="row">
                <label for="">Student Year and Course : </label>
                <input type="text" name="y_course" class="form-control" placeholder: Enter student year and course..>
            </div>
        </div>
    </form>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>