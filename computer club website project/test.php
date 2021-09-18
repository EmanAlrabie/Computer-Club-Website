<?php
 $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$idnum = $_POST['idnum'];
	$department = $_POST['department'];
	$level = $_POST['level'];
	$skills = $_POST['skills'];
    $email = $_POST['email'];
    $reson = $_POST['reson'];
// Create connection
$conn = new mysqli('localhost', 'root', '','computerclub');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql ="insert into members(fname,lname,idnum,department,level,skills,email,reson) 
values('$fname','$lname','$idnum','$department','$level','$skills','$email','$reson')";
	

if ($conn->query($sql) === TRUE) {
	header('location: membership.html');
} else {
    echo "Insertion Failed <br/> Some Fields are Blank....!! " . $conn->error;
}


mysqli_close($conn);
?>