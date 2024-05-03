<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php
if (!isset($_SESSION['EmployeeID'])) {
    header('Location: login.php');
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Evaluation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.content{
		 	margin: 80px 50px 100px 50px;
		 	display: flex;
		 	align-items: center;
		 	justify-content: center;
		 	min-height: 55vh;
		 }
		.con{ 	
		 	margin: auto;
		}
		
		.option{
		 	margin:25px;
		 	padding: 10px 5px;
		 	text-align: left;
		}
		.option a{
		 	color: #414190;
		 	font-size: 1.4em;
		 	text-decoration: none;
		 	font-weight: bold;
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}

		
	</style>
</head>
<body>
	<div class="header">
		<div class="left">
			<img src="pictures/logo-fas_n.png">
		</div>
        <div class="right">
			
            <p class="loggedin" style="font-family: inherit;font-size: 1.3em;color: #ffffff;">Welcome <a  style="font-family: inherit;font-size: 1.0em;color: #ffffff;" href="profile.php"><?php echo $_SESSION['FullName'] ?></a>!</p>
			<p class="loggedin" style="font-family: inherit;font-size: 1.3em;color: #ffffff;">Academic year <a  style="font-family: inherit;font-size: 1.0em;color: #ffffff;" href="#"><?php echo $_SESSION['Academic_year'] ?></a></p>

			<p><a style="font-family: inherit;font-size: 1.3em;color: #ffffff;" href="logout.php">  Log out</a></p>
			
            <!--<a href="profile.html"><img src="pictures/user.png" width="20px" height="20px"></a>-->
        </div>
	</div>
	
	<div class="topnav" id="myTopnav">
	  	<div class="dropdown">
	    	<button class="dropbtn">Academic Instructions 
	      		<i class="fa fa-caret-down"></i>
	    	</button>
	    	<div class="dropdown-content">
			<a href="TheorySessionView.php">Theory Sessions</a>
			      <a href="PracticalSessionsView.php">Practical Sessions</a>
			      <a href="Evolution.php">Evaluation</a>
			      <a href="other.php">Other</a>
	    	</div>
	  </div> 
	  <a href="AcademicCoor.php">Academic Coordination</a>
	  <a href="ResearchSup.php">Research Supervision</a>
	  <a href="WorkLoad.php">Workload Summary</a>
	</div>

	<div class="breadcrumb">
		<ul class="bc">
			<li><a href="main.php">Home</a></li>
			<li><a href="AcademicIns.php">Academic Instructions</a></li>
			<li>Evaluation</li>
		</ul>
	</div>

	<div class="content">
		<div class="con">
		<div class="option"><a href="SettingExamPapersView.php">Setting Exam Papers (Theory)</a></div>
		<div class="option"><a href="ModeratingExamPapersView.php">Moderating Exam Papers (Theory)</a> </div>
		<div class="option"><a href="markingView.php">Marking Exam Papers (Theory)</a></div>
		<div class="option"><a href="EvoView.php">Evaluation of quiz/assignments/tutorials</a> </div>
		<div class="option"><a href="computationResultsView.php">Computation of course results </a></div>


		</div>
		<div class="con">
		<div class="option"><a href="SettingExamPapersPracticalView.php">Setting Exam Papers (Practical)</a></div>
		<div class="option"><a href="ModeratingExamPapersViewP.php">Moderating Exam Papers (Practical) </a> </div>
		<div class="option"><a href="markingViewP.php">Marking Exam Papers (Practical)</a> </div>
		<div class="option"><a href="EvoPraView.php">Evaluation practical reports</a></div>

		</div>
		
	</div>



	
	<div class="footer">
		<center><p>&copy;University of Vavuniya-FAS | TaskTimer Workload Management System</p></center>
	</div>

</body>
</html>
<?php 
mysqli_close($connection);
?>