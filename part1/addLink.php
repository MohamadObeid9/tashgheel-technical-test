<?php
require_once 'db.php';
$studentId = $_POST['student-id'];
$universityId = $_POST['university-id']
$conn =  db_connect();
$query="INSERT INTO StudentUniversityLink VALUES(NULL,$studentId,$universityId)";
mysqli_query($conn,$query);