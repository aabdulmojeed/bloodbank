<?php

echo "Student Registration Page";
$studentName = $_POST["studentName"];
$password = $_POST["password"];
echo "Your name is: $studentName";
echo "Your password: $password";

var_dump($_POST);