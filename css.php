<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<title>DEBS REQ & CSS</title>

</head>

<!--
	#<x?php
    #session_start(); //starts the session
    #if($_SESSION['user']){ // checks if the user is logged in  
    #}
    #else{
    #    header("location: index.php"); // redirects if user is not logged in
    #}
    #$user = $_SESSION['user']; //assigns user value
    #?>
-->

<!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM -->
<!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM -->
<!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM -->
<!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM --><!-- SCRIPT FOR EXITING THE FORM -->
<script>
// Warning before leaving the page (back button, or outgoinglink)
window.onbeforeunload = function() {
   return "Leave site?";
   //if we return nothing here (just calling return;) then there will be no pop-up question at all
   //return;
};
</script>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->


<!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE -->
<!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE -->
<!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE -->
<!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE --><!-- CSS STYLE -->
<style>
/* Red border */
hr.new1 {
  border-top: 1px solid red;
}

/* Dashed red border */
hr.new2 {
  border-top: 1px dashed red;
}

/* Dotted red border */
hr.new3 {
  border-top: 1px dotted red;
}

/* Thick red border */
hr.new4 {
  border: 1px solid red;
}

/* Large rounded green border */
hr.new5 {
  border: 10px solid green;
  border-radius: 5px;
}








/* Time out */
#timeOut {
	background-color: yellow;
}



/* BODY */
body {
  margin: 0;
  font-family: "Lato", sans-serif;3
  background-color: #f7eeed;
}

* {box-sizing: border-box;}


/* FOR BODY CONTENT */

.bodyx {
  margin: 50px;
  font-family: "Lato", sans-serif;3
  background-color: #f7eeed;
  font-size: 18px; 
  <!--font-weight: bold;  -->
}


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


.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
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


/* Text Boxes */
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}


/* Radio Button */
/* The container */
.container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 17px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* Hide the browser's default radio button */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: gray; /*#eee*/
  border-radius: 50%;
}
/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}
/* When the radio button is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #2196F3;
}
/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
/* Show the indicator (dot/circle) when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}
/* Style the indicator (dot/circle) */
.container2 .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}


/* Content Center */
form.example::after {
  content: "";
  clear: both;
  display: table;
}


* bar rating */

.radio-toolbar {
  margin: 10px;
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    display: inline-block;
    background-color: #fff;
    padding: 10px 20px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    border: 2px solid #444;
    border-radius: 100px; <!--4px-->
}

.radio-toolbar label:hover {
  background-color: #dfd;
}

.radio-toolbar input[type="radio"]:focus + label {
    border: 2px dashed #444;
}

.radio-toolbar input[type="radio"]:checked + label {
    background-color: #bfb;
    border-color: #4c4;
}



</style>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->





<body>
<form method="post" action="save_css.php">

<div class="header">
	<class="logo">DEBS - CUSTOMER SATISFACTION SURVEY</class>
		<div class="header-right">
			<a class="active" href="home.php">Go Back</a>
			<!--
			<a class="active" href="#home">Home</a>
			<a href="#contact">Contact</a>
			<a href="#about">About</a>
			-->
		</div>
	</div>






<div class="bodyx">
<div class="form-row">
	<div class="form-group col-md-2">
		<label for="site"><b>TOR No.</b></label>
		<input type="text" class="form-control" id="torno" name="torno" placeholder="Enter TOR No." onkeyup="this.value = this.value.toUpperCase();"/ required>	
	</div>
</div>
 </div>
 

<div class="bodyx">
	<hr>
	<b>We would like to receive your feedback on the services rendered by the DEBS staff for its strengthening or improvement. We will appriciate it very much if you can take time to answer this evaluation form. Kindly fold and staple the completed form and deposit in the drop box. Thank you very much!</b>
	<br>
	<font color="blue">(Gusto po naming makuha ang inyong opinyon tungkol sa mga serbisyong iginawad ng mga staff ng DEBS upang mas mapaganda o mapahusay pa namin ang aming serbisyo. Lubos po naming ikalulugod kung makapaglaan kayo ng inyong sandali upang masagutan itong evaluation form. Pakitupi at i-staple ang nasagutang form at pakihulog sa drop box. Maraming salamat po!)</font>
	<hr>
</div>


<div class="bodyx"></div>


<div class="container mt-3">
<div class="form-row">
    
    <div class="form-group col-md-4">
		<label for="staff"><b>Name of DEBS Staff who rendered the service</b></label>
		<select id="staff" name="staff" class="form-control" >
        <!--option disabled selected>Choose...</option-->
		<option value=""></option>
		<option value="1">ALIGATO, MILA F.</option>
		<option value="2">ARAO, JARREN ARSHLLE S.</option>
		<option value="3">BRAVO, THEA ANDREA P.</option>
		<option value="4">DAGA, CHONA MAE A.O</option>
		<option value="5">DE CLARO, NICANOR III E.</option>
		<option value="6">DEMONTEVERDE, MARIA PAZ D.</option>
		<option value="7">ENDOMA, VIVIENNE F.</option>
		<option value="8">GUEVARRA, JERRIC RHAZEL B.</option>
		<option value="9">GUEVARRA, JHOYS L.</option>
		<option value="10">INOBAYA, MARIANETTE T.</option>
		<option value="11">JAVIER, JENALINE BALAIS</option>
		<option value="12">LANDICHO, JENIFFER M.</option>
		<option value="13">LUCEÑO, CARREN ANN B.</option>
		<option value="14">MALACAD, CAROL C.</option>
		<option value="15">MATIONG, MARY LORRAINE S.</option>
		<option value="16">REÑOSA, MARK DONALD C.</option>
		<option value="17">SEPULVEDA, ABRAHAM C.</option>
		<option value="18">SILVESTRE, CATHERINE J.</option>
		<option value="19">SORNILLO, JOHANNA BEULAH T.</option>
		<option value="20">TAN, ALVIN GUE
		</select>
	</div>

	<div class="form-group col-md-4">
		<label for="services"><b>Service Rendered</b></label>
		<select id="services" name="services" class="form-control" required>
        <!--option disabled selected>Choose...</option-->
		<option value=""></option>
		<option value="1">DMA</option>
		<option value="2">LIB</option>
		<option value="3">TEC</option>
		<option value="4">TES</option>
		<option value="5">OTHERS</option>
		</select>
	</div>   

    <div class="form-group col-md-4">
		<label for="servicesoth"><b>Others, specify</b></label>
		<input type="text" class="form-control" id="servicesoth" name="servicesoth" placeholder="Enter others" onkeyup="this.value = this.value.toUpperCase();"/ >	
	</div>
	
	    <div class="form-group col-md-4">
		<label for="requisitioner"><b>Name of person who completed the form</b></label>
		<input type="text" class="form-control" id="requisitioner" name="requisitioner" placeholder="Enter name" onkeyup="this.value = this.value.toUpperCase();"/ >	
	</div>

	<div class="form-group col-md-4">
		<label for="dteComplete"><b>Date of completion</b></label>
		<!--input type="date" class="form-control" id="dteComplete" name="dteComplete"  placeholder="Enter others"--> 
		<input type="date" class="form-control" data-date-format="Y-m-d" placeholder="" name="dteComplete" id="dteComplete" value="<?php echo date("Y-m-d"); ?>">		
	</div>

	<div class="form-group col-md-4">
		<label for="tmeComplete"><b>Time of completion</b></label>
		<!--input type="time" class="form-control" id="tmeComplete" name="tmeComplete" placeholder="Enter others" style="margin-top:8px;"-->
		<input type="time" class="form-control" id="tmeComplete" name="tmeComplete" placeholder="Enter others" style="margin-top:8px;">
	</div>
	
</div>  
</div>



<div class="container mt-3">
<div class="form-row">
    
	<div class="form-group col-md-12">
		<label for="site"><b>How long did you wait before DEBS staff <i>attended</i> to your request?</b></label>
	</div>

	<div class="form-group col-md-4">
		<input type="number" class="form-control" id="wait_m" name="wait_m" placeholder="Minutes">	
	</div>
	
	<div class="form-group col-md-4">
		<input type="number" class="form-control" id="wait_h" name="wait_h" placeholder="Hours">	
	</div>
	
	<div class="form-group col-md-4">
		<input type="number" class="form-control" id="wait_d" name="wait_d" placeholder="Days">	
	</div>
	
</div>  
</div>







<div class="bodyx">
	<hr>
	<b>Kindly rate how 'satisfied' you are with the service(s) that you received from the staff in terms of the following criteria putting a check mark in the box under the column of your choice. </b>
	<br>
	<font color="blue">(Pakilagay po kung gaano kayo nasiyahan sa serbisyong inyong natanggap mula sa staff ng DEBS sa pamamagitan ng paglalagay ng tsek sa loob ng box sa alin man sa mga sumusunod na pamantayan na sa palagay ninyo ay nararapat.)</font>
	<hr>
</div>


<div class="bodyx">
	
</div>

<font size="5">
<center><b>
<font color="blue">5</font> = Outstanding
&nbsp;&nbsp;&nbsp;&nbsp;
<font color="blue">4</font> = Very Satisfactory
&nbsp;&nbsp;&nbsp;&nbsp;
<font color="blue">3</font> = Satisfactory
&nbsp;&nbsp;&nbsp;&nbsp;
<font color="blue">2</font> = UnSatisfactory
&nbsp;&nbsp;&nbsp;&nbsp;
<font color="blue">1</font> = Poor
</center></b><br>
</font>


<div class="container mt-3"> <font size="4.5">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Feedback time (lapse between time of request and feedback on wheter service can be delivered or not)</b></label>
		<br><label for="site"><font color="blue">(minuto o oras sa pagitan ng paglalahad ng inyong request at pagsagot ng staff ng DEBS kung kayang gawin o hindi ang serbisyo)</font></label>
		<!--<br><label for="site"><font color="red">NOT APPLICABLE FOR ONGOING PROJECT INVOLVEMENT</font></b></label>-->
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs11" name="cs1" class="cs1" value="5">
				<label for="cs11" title="OUTSTANDING">5</label>
				<input type="radio" id="cs12" name="cs1" class="cs1" value="4">
				<label for="cs12" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs13" name="cs1" class="cs1" value="3">
				<label for="cs13" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs14" name="cs1" class="cs1" value="2">
				<label for="cs14" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs15" name="cs1" class="cs1" value="1">
				<label for="cs15" title="POOR">1</label>
				&nbsp;&nbsp;<font color="red"><b>NOTE:</b> NOT APPLICABLE FOR ONGOING PROJECT INVOLVEMENT</font>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Waiting time for service to be rendered?</b></label>
		<br><label for="site"><font color="blue">(Oras na hinintay ninyo bago nasimulan ang serbisyo?)</font></label>
		<!--<br><label for="site"><font color="red">NOT APPLICABLE FOR ONGOING PROJECT INVOLVEMENT</font></b></label>-->
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs21" name="cs2" class="cs2" value="5">
				<label for="cs21" title="OUTSTANDING">5</label>
				<input type="radio" id="cs22" name="cs2" class="cs2" value="4">
				<label for="cs22" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs23" name="cs2" class="cs2" value="3">
				<label for="cs23" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs24" name="cs2" class="cs2" value="2">
				<label for="cs24" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs25" name="cs2" class="cs2" value="1">
				<label for="cs25" title="POOR">1</label>
				&nbsp;&nbsp;<font color="red"><b>NOTE:</b> NOT APPLICABLE FOR ONGOING PROJECT INVOLVEMENT</font>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Courtesy of staff?</b></label>
		<br><label for="site"><font color="blue">(Magalang ang staff ng DEBS?)</font></label>
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs31" name="cs3" class="cs3" value="5">
				<label for="cs31" title="OUTSTANDING">5</label>
				<input type="radio" id="cs32" name="cs3" class="cs3" value="4">
				<label for="cs32" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs33" name="cs3" class="cs3" value="3">
				<label for="cs33" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs34" name="cs3" class="cs3" value="2">
				<label for="cs34" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs35" name="cs3" class="cs3" value="1">
				<label for="cs35" title="POOR">1</label>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Perceived competence of staff in the performance of the service delivered?</b></label>
		<br><label for="site"><font color="blue">(Husay ng staff ng DEBS sa paggawa ng serbisyong hinihiling?)</font></label>
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs41" name="cs4" class="cs4" value="5">
				<label for="cs41" title="OUTSTANDING">5</label>
				<input type="radio" id="cs42" name="cs4" class="cs4" value="4">
				<label for="cs42" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs43" name="cs4" class="cs4" value="3">
				<label for="cs43" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs44" name="cs4" class="cs4" value="2">
				<label for="cs44" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs45" name="cs4" class="cs4" value="1">
				<label for="cs45" title="POOR">1</label>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Addressed all concerns?</b></label>
		<br><label for="site"><font color="blue">(Natugunan ba ang lahat ng problema?)</font></label>
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs51" name="cs5" class="cs5" value="5">
				<label for="cs51" title="OUTSTANDING">5</label>
				<input type="radio" id="cs52" name="cs5" class="cs5" value="4">
				<label for="cs52" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs53" name="cs5" class="cs5" value="3">
				<label for="cs53" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs54" name="cs5" class="cs5" value="2">
				<label for="cs54" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs55" name="cs5" class="cs5" value="1">
				<label for="cs55" title="POOR">1</label>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Resolved all possible issues?</b></label>
		<br><label for="site"><font color="blue">(Naresolba ba ang lahat ng posibleng mga isyu?)</font></label>
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs61" name="cs6" class="cs6" value="5">
				<label for="cs61" title="OUTSTANDING">5</label>
				<input type="radio" id="cs62" name="cs6" class="cs6" value="4">
				<label for="cs62" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs63" name="cs6" class="cs6" value="3">
				<label for="cs63" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs64" name="cs6" class="cs6" value="2">
				<label for="cs64" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs65" name="cs6" class="cs6" value="1">
				<label for="cs65" title="POOR">1</label>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Completed the service requested?</b></label>
		<br><label for="site"><font color="blue">(Nagawa ba sa kabuuan ang serbisyong hiniling?)</font></label>
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs71" name="cs7" class="cs7" value="5">
				<label for="cs71" title="OUTSTANDING">5</label>
				<input type="radio" id="cs72" name="cs7" class="cs7" value="4">
				<label for="cs72" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs73" name="cs7" class="cs7" value="3">
				<label for="cs73" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs74" name="cs7" class="cs7" value="2">
				<label for="cs74" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs75" name="cs7" class="cs7" value="1">
				<label for="cs75" title="POOR">1</label>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="site"><b>Over-all satisfaction with service received</b></label>
		<br><label for="site"><font color="blue">(Pangkalahatang kasiyahan sa serbisyong natanggap)</font></label>	
	</div>
		<div class="form-group col-md-12">
			<div class="radio-toolbar">
				<input type="radio" id="cs81" name="cs8" class="cs8" value="5">
				<label for="cs81" title="OUTSTANDING">5</label>
				<input type="radio" id="cs82" name="cs8" class="cs8" value="4">
				<label for="cs82" title="VERY SATISFACTORY">4</label>
				<input type="radio" id="cs83" name="cs8" class="cs8" value="3">
				<label for="cs83" title="SATISFACTORY">3</label> 
				<input type="radio" id="cs84" name="cs8" class="cs8" value="2">
				<label for="cs84" title="UNSATISFACTORY">2</label> 
				<input type="radio" id="cs85" name="cs8" class="cs8" value="1">
				<label for="cs85" title="POOR">1</label>
			</div>
		</div>
</div>  
</div>

<div class="container mt-3">
<div class="form-row">
    <div class="form-group col-md-10">
		<label for="site"><b>Comments / Suggestions / Recommendations</b></label>
		<br><label for="site"><font color="blue">(Kumento / Mungkahi / Rekomendasyon)</font></label>
		<textarea class="form-control" id="css_comments" name="css_comments" placeholder="Write something.." style="height:200px" onkeyup="this.value = this.value.toUpperCase();"/></textarea>
		<!-- input type="text" class="form-control" id="subjectid" placeholder="Write something..." style="height:200px" -->
	</div>
</div>  
</div>




<div class="container mt-3">
<div class="form-row">
    <div class="form-group col-md-2">
		<button type="submit" class="btn btn-primary btn-block" onclick="window.onbeforeunload=null">Submit</button>
	</div>

    <div class="form-group col-md-2">
		<button type="submit" class="btn btn-secondary btn-block" onclick="window.onbeforeunload=null">Clear</button>
	</div>



</div>  
</div>

</font>

<br><br>



</form>

<!-- FOOTER -->
<br><br><div class="footer"><hr><p>Copyright © 2021 DEBS</p></div>











</body>
</html>
