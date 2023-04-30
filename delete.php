<?php 
include 'connection.php';

if (isset($_GET['id']));
    $id = $_GET['id'];

    $delete_student = $conn->prepare("DELETE FROM students WHERE id = ?");
    $delete_student->execute([$id]);

    header('location: read.php');

?>