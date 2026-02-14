<?php
include 'db.php';

if(isset($_POST['submit'])){
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students 
    (first_name,last_name,email,phone,course)
    VALUES ('$first','$last','$email','$phone','$course')");

    header("Location: index.php");
}
?>

<form method="POST">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="email" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Course: <input type="text" name="course"><br>
    <button name="submit">Save</button>
</form>
