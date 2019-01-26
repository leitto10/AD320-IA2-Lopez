<?php
$nameErr = $emailErr = $phoneErr = $stateErr = "";
$name = $email = $phone = $state = "";

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_GET["name"]);
  }

  if (empty($_GET["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_GET["email"]);
  }
}
 

 echo $_GET["name"]; 
 echo $_GET["email"];
echo $_GET["phone"]; 
 echo $_GET["state"]; 



?>