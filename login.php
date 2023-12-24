<?php

if(isset($_POST['save']))
{
	
$first_name=$_POST['first_name'];

$password=$_POST['password'];

$servername="localhost";
$username="root";
$password="abatwal@112";
$dbname="restaurant";
$conn=new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}


$sql="insert into login(first_name,password)values('$first_name','$password')";
if($conn->query($sql)==True)
{
	?><h3 class="msg"><?php echo "Record inserted successfully";
	
	?></h3><?php
	header("Location: afterlogin.html");
	
}
else
{
	?><h3 class="msg"><?php echo "Error".$sql."<br/>".$conn->error;?></h3><?php
}
$conn->close();
}

?>




<html>
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>



<style>
h1
{
text-align:center;
}
.f
{
height:370px;
width:350px;
text-align:center;
border:2px solid black;
margin-top:200px;
border-radius: 25px;
background: rgba(255,255,255,0.4);
-webkit-backdrop-filter: blur(12px);
backdrop-filter: blur(12px);
border: 1px solid rgba(255,255,255,1);
font-family: 'Helvetica', Arial, sans-serif;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}



input[type=text] {
  width:75%;
  padding: 10px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius:20px;
}

input[type=password] {
  width:75%;
  padding: 10px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius:20px;
}

body
{
  height: 100vh;
  background: linear-gradient(45deg, rgba(233, 125, 34, 1) , rgba(233, 125, 34, 0.5) );
  background-size: 400% 400%;
  animation: gradientAnimation 5s ease infinite;
}

button.a
{
  width:75%;
  padding: 10px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  color:white;
}

.nav-links li a.active {
  color: rgba(233, 125, 34, 0.7);
}

/* Hover effect for links */
.nav-links li a:hover {
  color: rgba(233, 125, 34, 1);
}

/* Updated styles for the navigation list items */
.nav-links li {
  color: rgba(233, 125, 34, 0.7);
}

/* Hover effect for navigation list items */
.nav-links li:hover {
  color: rgba(233, 125, 34, 1);
}

.an
{
  text-decoration:none;
  transition: transform 0.5s;
  color:black;
}

.an:hover{
  transform: scale(1.1); 
  text-decoration:none;
  color:black;
}

.custom-button {
      background: linear-gradient(to right, rgba(233, 125, 34, 1),#ffc107); /* Change this gradient to your desired colors */
      color: #fff; /* Text color for the button */
      border-color: rgba(233, 125, 34, 1);; /* Border color for the button */
      transition: transform 0.5s;
      border-radius:20px;
    }

.custom-button:hover{
  transform: scale(1.1); 
  color:#fff;
}


@keyframes gradientAnimation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

</style>

<body>

<div id="section1">
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:rgba(233, 125, 34, 0);">
    <div class="container">
      <a href="index.html" class="navbar-brand"><h2 style="color:#672F02"> YUM!</h2></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarid">
        <ul class="navbar-nav text-center ml-auto">
          <li class="nav-items">
            <a href="index.html" class="nav-link ">Home</a>
          </li>
          <li class="nav-items">
            <a href="about_us.html" class="nav-link ">About Us</a>
          </li>
          
          <li class="nav-items">
            <a href="menu.html" class="nav-link">Menu</a>
          </li>
		   <li class="nav-items">
            <a href="offers.html" class="nav-link">Our Special Offers</a>
          </li>
          <li class="nav-items">
            <a href="contact_us.html" class="nav-link">Contact</a>
          </li>
          
          <li class="nav-items">
            <a href="signup.php" class="nav-link " >Signup</a>
          </li>
		  <li class="nav-items">
            <a href="login.php" class="nav-link active" >Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<center>
<div class="f"><br>
<div class="row" style="width:350px; margin-left:0px;">
  <div class="col-6 " style="border-right: 1px solid black; background-color:rgba(0, 0, 0, 0.2); margin-top:-24px; height:50px; border-radius:25px 0px 10px 0px">
  <a href="signup.php" class="an"><p class="an" style="margin-top:10px;">Sign up</p></a>
  </div>
  <div class="col-6" >
    <p style="margin-top:-10px;">Log in</p>
  </div>
</div><br>
<form method="POST">
<h3 class="font-weight-bold" style="color: rgba(233, 125, 34, 1)">Craving Somthing?</h3>
<p>Let's get you started</p>
<input type="text" name="first_name" placeholder="Name*" required><br>
<input type="password" name="password" placeholder="Enter your Password*" required><br>


<button type="save" name="save" class="btn custom-button a">Sign Up</button>
</form>
</div>
</center>
</body>
</html>