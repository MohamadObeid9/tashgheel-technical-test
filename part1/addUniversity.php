<?php
require_once 'db.php';
$uniName = $_POST['uniName'];
$uniLocation = $_POST['uniLocation']
$conn =  db_connect();
$query="INSERT INTO university VALUES(NULL,$uniName,$uniLocation)";
mysqli_query($conn,$query);