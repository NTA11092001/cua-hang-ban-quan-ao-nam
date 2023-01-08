<?php
$mysqli = new mysqli("localhost","root","","web_thoitrang");
mysqli_set_charset($mysqli, 'UTF8');
// Check connection
if ($mysqli->connect_errno) {
  echo"Lỗi kết nối mysqli" . $mysqli->connect_error;
  exit();
}
?>