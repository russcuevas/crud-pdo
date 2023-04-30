<?php 
include 'connection.php';

if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $y_course = $_POST['y_course'];

    $update_student = $conn->prepare("UPDATE students SET name = ?, age = ?, y_course = ? WHERE id = ?");
    $update_student->execute([$name, $age, $y_course, $id]);

    header('location: read.php');
}


$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM students WHERE id = ? ");
$stmt->execute([$id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <h1 class="mb-5 text-center">Update Students</h1>
    <form action="" method="post">
      <div class="form-group mb-3">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <label for="name">Student Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $student['name']; ?>" required>
      </div>
      <div class="form-group mb-3">
        <label for="age">Student Age</label>
        <input type="number" class="form-control" id="age" name="age" value="<?php echo $student['age']; ?>" required>
      </div>
      <div class="form-group mb-3">
        <label for="y_course">Student Year-Course</label>
        <input type="text" class="form-control" id="y_course" name="y_course" value="<?php echo $student['y_course']; ?>" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
      <a href="read.php" class="btn btn-warning">Cancel</a>
    </form>
    
  </body>
</html>