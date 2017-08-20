<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <style>
      body{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Student Management System</h1>
    <?php
      echo '<h3>New Student Record</h3>';
      echo '<p>Registration Num : ' . $_POST['reg-num'] . '</p>';
      echo '<p>Full Name : ' . $_POST['full-name'] . '</p>';
      echo '<p>Date of Birth : ' . $_POST['dob'] . '</p>';
      echo '<p>Gender : ' . $_POST['gender'] . '</p>';
      echo '<p>Address : ' . $_POST['address'] . '</p>';
      echo '<p>Phone : ' . $_POST['phone'] . '</p>';
    ?>
  </body>
</html>
<?php
  $regNum = $_POST['reg-num'];
  $fullName = $_POST['full-name'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

  $connection = mysqli_connect('localhost', 'root', '', 'student_db');
  $query = "INSERT INTO student VALUES ('$regNum', '$fullName', '$dob', '$gender', '$address', '$phone')";

  if (!$connection) {
    die('Could not connect: ' . mysql_error());
  } else {
    echo "Connection established successfully!<br>";
  }

  if($connection->query($query) === TRUE){
    echo 'Record added successfully!<br>';
  }else{
    echo mysqli_error($connection);
  }

  $query = "SELECT * FROM student";
  $records = $connection->query($query);
  ?>
  <table>
    <th>Registration Number</th>
    <th>Name</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Phone</th>
  <?php
  while($record = $records->fetch_assoc()){ ?>
      <tr>
        <td>
          <?php echo $record['reg_num'] ?>
        </td>
        <td>
          <?php echo $record['name'] ?>
        </td>
        <td>
          <?php echo $record['dob'] ?>
        </td>
        <td>
          <?php echo $record['gender'] ?>
        </td>
        <td>
          <?php echo $record['address'] ?>
        </td>
        <td>
          <?php echo $record['phone'] ?>
        </td>
      </tr>
  <?php
  }
  mysqli_close($connection);
  ?>
  </table>
