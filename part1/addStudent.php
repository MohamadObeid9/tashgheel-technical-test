<?php
require_once 'db.php';
$fullName = $_POST['fullName'];
$email = $_POST['email']
$conn =  db_connect();
$query="INSERT INTO student VALUES(NULL,$fullName,$email)";
mysqli_query($conn,$query);