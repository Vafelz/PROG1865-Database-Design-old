<HTML>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydboke";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO names (fname, lname)

VALUES 

('$_POST[fname]','$_POST[lname]')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
</body>
</html>