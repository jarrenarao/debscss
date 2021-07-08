<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
DEBS REQ & CSS
</title>

</head>


<style>


/* BODY */
body {
  margin: 0;
  font-family: "Lato", sans-serif;3
  background-color: #f7eeed;
}

* {box-sizing: border-box;}


/* HEADER */
.header {
  overflow: hidden;
  background-color: #04AA6D;
  padding: 20px 10px;
  color: white;
  text-align: center;
  font-size: 30px; 
  font-weight: bold;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}


/* Footer */

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 50%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

span.acct {
  float: center;
  padding-top: 16px;
}


/* Content Center */
form.example::after {
  content: "";
  clear: both;
  display: table;
}


/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}


</style>








<body>









<div class="content">

<div class="header">
  <class="logo">DEPARTMENT OF EPIDEMIOLOGY AND BIOSTATISTICS</class>
  <div class="header-right">
    <!--
	<a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
	-->
  </div>
</div>






  <form class ="example" method="post" action="checklogin.php" style="margin:auto;max-width:300px">
    <div class="imgcontainer">
      <!-- span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span -->
      <img src="images\img_avatar.png" alt="Avatar" class="avatar">
    </div>






    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="myInput" name="password" required>
	  <input type="checkbox" onclick="myFunction()">Show Password

      <button type="submit">Login</button>
      <label>
        <!-- input type="checkbox" checked="checked" name="remember"> Remember me -->
      </label>
    </div>


    <div class="container" style="background-color:#fff">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  <span class="psw">Create <a href="register.php">account?</a> &nbsp;&nbsp;&nbsp; Forgot <a href="#">password?</a></span>
	  <!-- span class="psw">Forgot <a href="#">password?</a></span -->
    </div>
















</div>
















<!-- FOOTER -->
<br><br><div class="footer"><hr><p>Copyright © 2021 DEBS</p></div>

















<script>




function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}





// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}








</script>





</form>

</body>
</html>
