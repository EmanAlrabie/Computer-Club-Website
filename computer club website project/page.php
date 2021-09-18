<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 




</head>
<body>
    <div class="topnav">
        <a class="logo" id="logo" href="#" ><img src="img/logocc.png" ></a>
        <a class="active" href="MasterPage.html#">Home</a>
        <a class="active" href="#">|</a>
        <a href="PastEvent.html">Past Event</a>
        <a class="active" href="MasterPage.html#">|</a>
        <a href="MasterPage.html#contact_us">Contact Us</a>
        <a class="active" href="#">|</a>
        <a href="MasterPage.html#about">About Team</a>
      </div>

      <div class="somethinhere">
<form class ="membership" action="page.php"  method="post" style="border:1px solid #ccc" >
  <div class="container">
    <h1>Club Membership Form</h1>
    <p>Please fill in this form to join the computer club.</p>
    <hr>

<label for="name"><b>Name</b><br>
  <input type="text" placeholder="First" name="fname" required size='17'>     <input type="text" placeholder="Last" name="lname" required size='17'>  </label>
    <br>
	<label for="memberinfo"><b>Member Information</b><br>
    <input type="text" placeholder="ID Number" name="idnum" required size='17'> <input type="text" placeholder="Department" name="department" required size='17'><br>
	<br>Academic year <select  name="level"  required >
	<option>select year</option>
	<option>First Year</option>
	<option>Second Year</option>
	<option>Third Year</option>
	<option>Fourth Year</option>
	<option>Fifth Year</option></select>
	<br>
	<p>Your skills<br> <textarea name="skills" cols="45" >  </textarea></p>
	</label>
	
    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="name@mail.com" name="email" required size='45'></label>
 <br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="6 symbols" name="psw" maxlength="6" required size='45'>

<br>
    
<p>Why did you join club? <br> <textarea name="reson" cols="45">  </textarea></p>
    

    <center>
      <label> <input type="submit" value="save" name="submit" style="background-color: #d6601c; padding:10px 42px;color:white;font-size:16px;border-radius:6px;
cursor:pointer; " >
	  
  </label>
  <br>
<br>
<br>
<br>
 
<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "root", "");

	//Selecting Database from Server
	$db = mysqli_select_db( $connection, "membership");
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$idnum = $_POST['idnum'];
	$department = $_POST['department'];
	$level = $_POST['level'];
	$skills = $_POST['skills'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $reson = $_POST['reson'];
    if($fname !=''||$email !=''){
	//Insert Query of SQL
    $query = mysqli_query($connection, "insert into members(mem_fname,mem_lname,mem_id,mem_department,mem_Academic_year,skill,mem_email,password,reson_ofjoined) values('$fname','$lname','$idnum','$department','$level','$skills','$email','$psw','$reson')");
	echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
    }
 
	}
	//Closing Connection with Server
	mysqli_close($connection);
?>				

</form>



      </div>

<br><br><br><br><br>

      <div class="footer">
        <p>Created By students : Fatma ,eman . afaf.bedoor</p>
      </div>   
</body>
</html>