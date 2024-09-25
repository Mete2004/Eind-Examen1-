<?php
// $servername = "localhost";
// $username = "mete";
// $password = "Metekaan123";

// $title = $_POST['title'];
// $message = $_POST['message'];

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=eetkamer", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


//   $sql = "INSERT INTO blog (blog_titel, blog_text) VALUES ($title, $message)";

//   if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     // echo "Error: " . $sql . "<br>" . $conn->error;
//   }

$servername = "localhost";
$username = "mete";
$password = "Metekaan123";
$dbname = "eetkamer";

$title = $_POST['title'];
$message = $_POST['message'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>