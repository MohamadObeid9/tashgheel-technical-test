<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <script src="index.js"></script>
</head>
<body>
  <div>
    <h2>View all Students:</h2>
    <ul>
      <?php
      include('functions.php');
      $connect = db_connect();
      if (!$connect) {
        die("Database connection failed: " . mysqli_connect_error());
      }
      $res = mysqli_query($connect, "SELECT * FROM student");
      if ($res) {
        while ($row = mysqli_fetch_array($res)) {
          echo "<li>" . htmlspecialchars($row['fullName']) . "</li>";
        }
      } else {
        echo "<li>Error fetching students: " . mysqli_error($connect) . "</li>";
      }
      ?>
    </ul>
    <button onClick="addStudent()" id="addStudent">Add Student</button>
  </div>
  <div>
    <h2>View all Universities:</h2>
    <ul>
      <?php
      $res = mysqli_query($connect, "SELECT * FROM university");
      if ($res) {
        while ($row = mysqli_fetch_array($res)) {
          echo "<li>" . htmlspecialchars($row['uniName']) . "</li>";
        }
      } else {
        echo "<li>Error fetching universities: " . mysqli_error($connect) . "</li>";
      }
      ?>
    </ul>
    <button onClick="addUniversity()" id="addUniversity">Add University</button>
  </div>
  <div>
    <h2>View all Connections:</h2>
    <ul>
      <?php
      $res = mysqli_query($connect, "SELECT * FROM StudentUniversityLink");
      if ($res) {
        while ($row = mysqli_fetch_array($res)) {
          $studentId = htmlspecialchars($row['student-id']);
          $universityId = htmlspecialchars($row['university-id']);

          $studentNameQuery = mysqli_query($connect, "SELECT fullName FROM student WHERE id=$studentId");
          $universityNameQuery = mysqli_query($connect, "SELECT uniName FROM university WHERE id=$universityId");

          $studentName = mysqli_fetch_array($studentNameQuery)['fullName'] ?? 'Unknown';
          $universityName = mysqli_fetch_array($universityNameQuery)['uniName'] ?? 'Unknown';

          echo "<li>" . htmlspecialchars($studentName) . " - " . htmlspecialchars($universityName) . "</li>";
        }
      } else {
        echo "<li>Error fetching students universities links: " . mysqli_error($connect) . "</li>";
      }
      ?>
    </ul>
    <button onClick="showAddLinkForm()" id="addLink">Add University</button>
    <div id="addLinkForm" style="display: none;">
      <form method="POST" action="addLink.php">
        <label for="student">Select Student:</label>
        <select name="student-id" id="student">
          <?php
          $students = mysqli_query($connect, "SELECT id, fullName FROM student");
          if ($students) {
            while ($student = mysqli_fetch_array($students)) {
              echo "<option value='" . htmlspecialchars($student['id']) . "'>" . htmlspecialchars($student['fullName']) . "</option>";
            }
          }
          ?>
        </select>
        <label for="university">Select University:</label>
        <select name="university-id" id="university">
          <?php
          $universities = mysqli_query($connect, "SELECT id, uniName FROM university");
          if ($universities) {
            while ($university = mysqli_fetch_array($universities)) {
              echo "<option value='" . htmlspecialchars($university['id']) . "'>" . htmlspecialchars($university['uniName']) . "</option>";
            }
          }
          mysqli_close($connect);
          ?>
        </select>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>