<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 50px;
 
}
</style>
</head>
<body>

<div class="navbar">
  <a href="home.html">Home</a>
  <a href="my_personal_details.html">My Personal Details</a>
  <a href="video.html">Video</a>
  <a href="my_contact_details.html">My Contact Details</a>
  <a href="my_hobbies.html">My Hobbies</a>
  <a href="gallery.html">Gallery</a>
  <a href="feedback.html">Feedback</a>
  <a href="change-password.html">Change Password</a>
  <a href="logout.html">Logout</a>
</div>

<div class="main">

  <style>
  body {
    background-image: url('333.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
  }
  </style>

<style>
  img {
    border-radius: 50%;
  }
  </style>
  <h1 style="color:white" align = middle>Welcome To My Page!</h1>
  

<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

  <img src="11111.jpg" alt="Avatar" style="width:550px">

</div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>