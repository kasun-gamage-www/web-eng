<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //echo 1 + 5;
      //print_r($_GET);
      $x = $_POST['reg'];
      $y = $_POST['student-name'];

      echo '<p>registration number is ' . $x . '</p><br>';
      echo '<p>student name is ' . $y . '</p><br>';

      $conn = mysqli_connect("localhost", "root", "", "newdb");
      $sql = "INSERT INTO student VALUES('$x', '$y')";
      $sqlSingleQuote = 'INSERT INTO student VALUES(' . $x . ',' . $y . ')';

      $conn->query($sql);
      echo mysqli_error($conn);

      mysqli_close($conn);

    ?>
  </body>
</html>
