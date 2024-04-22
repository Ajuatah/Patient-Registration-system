<?php
  $firstName = $_POST['firstName '];
  $email = $_POST['email '];
  $subject = $_POST['subject'];
  $country = $_POST['country '];
  $comment = $_POST['comment '];
  $gender = $_POST['gender '];
  $level = $_POST['level '];
  
  
$conn = new mysqli('localhost','root','','test');
if ($conn->connect_error) {
  die('connection faied : ' . $conn->cennect_error);
} else {
  $stmt = $conn->prepare("insert into registration(firstName, email, subject, country, comment, gender, level)
  values(?,?,?,?,?,?,?)");
  $stmt ->bind_param("sssssss", $firstName, $email, $subject, $country, $comment, $gender, $level);
  $stmt->execute();
  echo "registration successful";
  $stmt->close();
  $conn->close();
}

?>