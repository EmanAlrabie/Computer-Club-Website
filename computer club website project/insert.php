<?php
   
     //Fetching variables of the form .
      
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $dept = $_POST['dept'];
     $msg = $_POST['message'];


     

     
// Create connection
$conn = new mysqli('localhost','root','','computerclub');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedback (email, subjct, department, msg) 
VALUES ('$email','$subject', '$dept', '$msg')";

if ($conn->query($sql) === TRUE) {
    header( 'Location: index.html' ) ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


  ?>