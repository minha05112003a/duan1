<?php
$mysqli = new mysqli("","","","");

mysqli_set_charset($mysqli, 'UTF8');
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>