<?php
function connection() {
  $host = "localhost";
  $user = "root";
  $pass = "";

  $db = "crud_user";

  $connect = mysqli_connect($host, $user, $pass);

  mysqli_select_db($connect, $db);
  return $connect;
}