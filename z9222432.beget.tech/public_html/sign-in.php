<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  echo "Your name: $name  <br>";
  echo "Your email:  $email <br>";
  echo "Your password: $password <br>";
  echo "Logged in successfuly!";
}
?>