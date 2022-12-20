<?php
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Message = $_POST['Message'];

  // Database connection
  $conn = new mysqli('localhost','root','','ermukha');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into registration(FirstName, LastName, Email, Phone, Message) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $FirstName, $LastName, $Email, $Phone, $Message);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
  }
?>
