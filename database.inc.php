<?php

$conn = new mysqli('localhost', 'root', '', 'tp1_sgbd');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>