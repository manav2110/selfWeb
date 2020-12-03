<?php
session_start();
if(!isset($_SESSION['semail'])){
	if(isset($_POST['submit'])){
		if(isset($_POST['semail'])!= ""){
			$email=$_POST['semail'];
			$_SESSION['semail'] = $email;
			$conn1 = mysqli_connect("localhost","root","","email");
			$sql1="INSERT INTO email VALUES('','$email')";
			$result1=mysqli_query($conn1,$sql1);
			if($result1){

			echo "<script> alert('Subscription done'); </script>";
			}
		}else{
			alert("Fill all the fields");
		}
		
	}
}

?>
<?php 
if(isset($_POST['csubmit'])){
		
		if(isset($_POST['email'])!="" && isset($_POST['fname'])!="" && isset($_POST['lname'])!="" && isset($_POST['mname'])!="" && isset($_POST['mnum'])!="" && isset($_POST['description'])!=""){
			$cemail=$_POST['email'];
			$cfname=$_POST['fname'];
			$cmname=$_POST['mname'];
			$clname=$_POST['lname'];
			$cmnum=$_POST['mnum'];
			$cdescription=$_POST['description'];
			$conn = mysqli_connect("localhost","root","","contactme");
			$sql="INSERT INTO contactme VALUES('','$cfname','$cmname','$clname','$cmnum','$cemail','$cdescription')";
			$result=mysqli_query($conn,$sql);
		// if($result){

		// 	echo "<script> alert('Request done'); </script>";
		// }
			
	}
		// else{
		//  	alert("Fill all the fields");
		//  }
			
	}
?>
  







<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">
	$(document).ready(function(){
	$(".dropdown").hide();
	$("#bar").click(function(){
		$(".dropdown").toggle();
		});
	$(".dropdown").mouseleave(function(){
		$(".dropdown").hide();
	});
	$("li").click(function(){
		$(".dropdown").hide();
	});
	

});
</script>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale-1.0">
	<title></title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<title>navbar</title>
	<script type="text/javascript" src="jqueryself.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'><script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="selfweb.css">
</head>
<body>
	<div class="topnav">
		<div class="bar">
			<i class="fa fa-bars" id="bar"></i>
		</div>
		<div class="dropdown">
				<ul>
					<li><a href="#about"><i class="fa fa-user" id="1about" style="color: white;padding-left: 12px;padding-bottom: 20px;"><span>&nbsp&nbsp&nbsp&nbsp&nbspAbout me</span></i></a></li>
					<li><a href="#certifications"><i class="fa fa-graduation-cap" style="color: white;padding-left: 8px;padding-bottom: 18px;padding-top: 8px;"><span>&nbsp&nbsp&nbspCertifications</span></i></a></li>
					<li><a href="#skills"><i class="fa fa-tachometer-alt" style="color: white;padding-left: 9.5px;padding-top: 8px;font-size:15px;" ><span>&nbsp&nbsp&nbsp&nbsp&nbspSkills</span></i></a></li>
					
					<li><a href="#projects"><i class="glyphicon glyphicon-tasks" style="color: white;padding-left: 10px;padding-top: 0px;"><span>&nbspProjects</span></i></a></li>
					<li><a href="#contact"><i class="fas fa-comment" style="color: white;padding-left: 10px;padding-bottom: 20px;padding-top: 8px;"><span>&nbsp&nbsp&nbsp&nbspContact Me</span></i></a></li>
					
					<li><a href="#resume"><img src="resumeicon.png" style="padding-top: 0px;padding-left: 10px;"><span style="color: white;font-weight: 300;padding-top: 9px;text-decoration: none;">&nbsp&nbsp&nbsp&nbspResume</span></a></li>
					
				</ul>
		</div>
	</div>

	<br>
	<div class="div2" id="div">
		<div class="image">
		</div>
			<div class="perimg">
				<img src="person.jpg">  
			</div>
			<div class="text">
				&nbsp&nbsp&nbsp&nbsp&nbspManav Jain<br>I.T Engineer(Student)
			</div>
	</div>
	<div id="about" style="background-color: white"><br><br>
<h1 align="center" style="color: orange;padding-top: 4px;padding-bottom: 10px;text-shadow: 2px 2px black;margin-top: 200px;"><b><i><u>About Me</u></i></b></h1>

<div class="aboutmetext" style="">
	I'm Manav Atulkumar Jain living in Ahmedabad and completing my course of Bachelor Of Engineering from a well-known government college Lalbhai Dalpatbhai College of Engineering (LDCE). I studied my whole academics in from English Medium School . I completed my primary studies from Little Flower School. I completed my secondary studies from English Medium convent school St.Ann's , Ahmedabad and higher education from St.Xaviers's Loyola,Ahmedabad. I decided to select IT engineering because of my interest in the world of technology and programming.	I am always ready to deal with the challenges in programming . I have enough interpersonal skills to attract and also to deal with the clients . I am always ready to learn new things in programming and to apply it.I would be happy to do the programming which can benefit the society.
</div>
</p><hr> 
<div class="div3" id="certifications">

<h1 align="center" style="color: orange;opacity: 1;padding-top: 4px;padding-bottom: 10px;text-shadow: 2px 2px black;margin-top:200px;"><b><i><u>Certifications</u></i></b></h1>


	<div class="col1">
		<div class="img1">
			<img src="hackathon.jpg">
				<div class="overlay">
					<div class="text">
						Smart Gujarat<br> Hackathon
					</div>
				</div>
		</div>
		<h1></h1>
		<br><br>
		This certificate is for the Smart Gujarat Hackathon in which I participated with my team on a web development project of Society Management System.
	</div>
	<div class="col2">
		<div class="img2">
			<img src="c.png">
			<div class="overlay">
					<div class="text">
						C language
					</div>
			</div>
			
		</div>
		<h1></h1><br><br>
		This is the certificate for learning the C language from the club named Coder's Club of our renowned college LDCE
	</div>
	<div class="col3">
		<div class="img3">
			<img src="python.png">
			<div class="overlay">
					<div class="text">
						Python language
					</div>
			</div>
		</div>
		<h1></h1><br><br>
		This is the certificate for leaning the Python language from the renowned online academy named Progate.
	</div>
</div>
<div class="div4" id="skills" style="">
	
		<h1 align="center" style="color: orange;padding-top: 4px;padding-bottom: 10px;text-shadow: 2px 2px black;margin-top: 200px;"><b><i><u>Skills</u></i></b></h1>
	<hr>
	<br>
	<h1 align="left" style="padding-left: 30px;margin-top: 100px; ">Web-Design</h1>
		<div class="progressbar1" style="">
			<div class="progress1" style="">
				<h4 align="center" style="padding-right: 20px;padding-top: 10px;">80%</h4>
			</div>
		</div>
	<h1 align="left" style="margin-top: 80px;padding-left: 30px; ">Web Development</h1>
		<div class="progressbar2">
			<div class="progress2" style="">
				<h4 align="center" style="padding-right: 20px;padding-top: 10px;">90%</h4>
			</div>
		</div><br><br>
	<div class="bg">
		
		<div class="text1">
			<div class="box">
				<i class="fa fa-code" style=""></i>
			</div><br><br>
			Languages known are
			Html , Css , JavaScript , jQuery , SQL , PHP , Python , C .
		</div>
		<div class="text2">
			<div class="box">
				<i class="fa fa-tasks" style=""></i>
			</div><br><br>
			Worked on projects of Choco-Lat , Riterewaz Caterers and Soceity Management system . 
		</div>
		<div class="text3">
			<div class="box">
				<i class="fa fa-certificate" style=""></i>
			</div><br><br>
			Got a certificate for learning C language and Python language and for Smart Gujarat Hackathon . 
		</div>
	</div>
		<br><br><br><br>
</div>

		<h1 align="center" style="color: orange;padding-top: 4px;padding-bottom: 10px;text-shadow: 2px 2px black;margin-top: 0px;"><b><i><u>Resume</u></i></b></h1>
		<div class="div5" id="resume" style="">

	<hr>
	<h1 align="center" style="margin-top: 0px;font-family: sofia;margin-top: 0px;">Manav Jain </h1>
	<div class="resume" style="">
		<div class="resum1">
			<div class="res" style="">
				<div class="res1" >
					<div class="box1" style=""><span></span></div>
					<div class="box2" style="margin-top: 50px;">
						<i class="fa fa-graduation-cap" style=""></i>
					</div>
					<div class="box3" style=""><span></span></div>
					<div class="box2" style="padding-top: 9px;">
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<div class="box4"><span></span></div>
					<div class="box2" style="padding-top: 12px;margin-top: 180px;">
						<i class="fas fa-tasks"></i>
					</div>
					<div class="box3"><span></span></div>
					<div class="box2" style="padding-top: 12px;">
						<i class="fas fa-laptop"></i>
					</div>
					<div class="box5"><span></span></div>
				</div>
				<div class="res2" style="">
					<div class="content" style="margin-top: 0px;border: none;background-color: bisque;padding: 10px;font-size: 15px;height: 60px;line-height: 20px;color: bisque;">
					
					</div>
					<div class="content" style="margin-top: 0px;">
						Education
					</div>
					<div  id="resedu" style="">
						Studied In English Medium School<br>
						Primary Studies : Little Flower School,Ahmedabad<br>
						Secondary Studies : St.Ann's High School,Ahmedabad<br>
						Higher Secondary Studies : St.Xavier's Loyola High School,Ahmedabad<br>
						Bachelor Of Engineering : Lalbhai Dalpatbhai College of Engineering,Ahmedabad 
					</div>
					<div class="content" style="">
						Skills
					</div>
					<div  id="resskills" style="">
						Languages known :<br>
						<ul style="width: 100%;">
							<li> HTML </li>
							<li> CSS </li>
							<li> JavaScript </li>
							<li> SQL</li>
						</ul><br>
						<ul style="width: 100%;">
							<li> jQuery </li>
							<li> Php </li>
							<li> Java </li>
							<li> Python </li>
						</ul>
						<br><br>
						Microsoft Skills : <br>
						<ul style="width: 100%;">
							<li> Word </li>
							<li> Excel </li>
							<li> Powerpoint </li>
						</ul><br>
						
				 Self Confident.<br>
				Fluency in English.<br> 
					
						
					</div>
					<div class="content" style="">
						Projects
					</div>
					<div style="" id="none">
						<ul>
							<li> Member of the team of Web development for Riterewaz Caterers. </li><br>
							<li> Designed Website for the company Choco-Lat </li><br>
							<li>  Member of the team of Web development for Society Management System in Smart Gujarat Hackathon.</li>
						</ul>
					</div>
					<div class="content" style="">
						Contact Me
					</div>
					<div  id="rescon" style="text-align: center;">
						<a href="https://wa.me/9998626184"><i class="fab fa-whatsapp" style="color: lightgreen;font-size: 30px;"></i></a>
								&nbsp&nbsp
						<a href="https://www.facebook.com/jain.manav.1"><i class="fab fa-facebook" style="color: #0066ff;font-size: 30px;"></i></a>
							&nbsp&nbsp
						<a href="https://www.instagram.com/jmanav02/"><i class="fab fa-instagram" style="color: hotpink;font-size: 30px;"></i></a>
							&nbsp&nbsp
						<a href="mailto:jm27504314@gmail.com"><i class="fas fa-envelope" style="color: #e62e00;font-size: 30px;"></i></a>
						&nbsp&nbsp
						<a href="tel:9265983884"><i class="fas fa-phone" style="color: lightgreen;font-size: 30px;"></i></a>
				
					</div>

				</div>
			</div>
		</div>
		<div class="resum2" style="">
			<img src="res4.jpg" id="reimg" ><br>			
		<div class="res3" style="">
			Web<br> Design
		</div><br>
		<div class="res3" style="">
			Web<br> Coding
		</div><br>
		<div class="res3" style="">
			Web<br> app
		</div><br>
		</div>
		
	</div>
</div>
<div class="div6" id="projects">
	
		<h1 align="center" style="color: orange;padding-top: 4px;padding-bottom: 10px;text-shadow: 2px 2px black;margin-top: 1000px;"><b><i><u>Projects</u></i></b></h1>
<hr>
	<div class="pro" id="firstpro" style="">
		<div class="pro1" style="">
			<img src="rr.jpg"><br><h4 align="center"> 2020 </h4>
		</div>
		<div class="pro2" style="">
			Riterewaz Caterers &nbsp :<br>
			This Website was made by our team . This website is for the caterers shop who wants to develop their dynamic website for ordering by the customers and also to subcribe their website . This website includes many of the latest features like poping up for the subscription form, online payment, contact form, the feature to book a package for the small event and also to take the orders from the customer within certain limit of distance . I worked in backend for this website.
		</div>
	</div>
	<div class="pro" id="middlepro">
		
		
		<div class="pro1" >
			<img src="chocolat.png"><br><h4 align="center"> 2020 </h4>
		</div>
		<div class="pro2" style="">
			Choco - Lat  &nbsp :<br>
			This website is designed by me . This website is designed by me for my personal purpose . I designed this website in 2019 using frontend languages like HTML , CSS , JavaScript , jQuery . This website is a single page website made by me just for the competition purpose for getting selected in a team for developing a website .
		</div>
	</div>
	<div class="pro" id="lastpro">
		<div class="pro1">
			<img src="sm1.jpg"><br><h4 align="center"> 2019 </h4>
		</div>
		<div class="pro2">
			Society Management System &nbsp :<br>
			This Website was made by our team . This website is for the the society management system . We designed this website for the management in the society like the notifications for the regular updates in the society, for the society meeting , for some event handling function for the society members and also for the outsiders . We designed this website in the Smart Gujarat Hackathon with my team when we all are in the first year of the college. So, at that time we didn't have enoungh knowledge for the website but we tried our best . I worked in backend for this website.
		</div>
	</div>
</div>
 <?php if(!isset($_SESSION['semail'])) { ?> 
<div id="subscribe" class="subscribe" style="border-radius: 30px;overflow: hidden;">
	<h5 align="center" style="text-shadow: 1px 1px skyblue;color: black;"><b><i><u> Subscribe Me </u></i></b></h5><hr>
	<div class="title" style="">
		<h5 align="center">Get notified of any update from me through your email!</h5>
	</div><br>
	<div class="form" style="text-align: center;">
		<form action="" method="POST">
			<div class="formelement">
				<input type="email" name="semail" placeholder="Email" required="required" ><br><br>
				<input type="submit" value="Submit" name="submit" style="background-color: green;color: white"> &nbsp &nbsp &nbsp
				<input type="button" value="Ignore" id="ignore" name="ignore" style="background-color: red;color: white"><br><br>
			</div>
		</form>
	</div>
</div>
<?php } ?>

<div id="contact" class="contact" style="">
	
		<h1 align="center" style="color: orange;padding-top: 4px;padding-bottom: 10px;text-shadow: 2px 2px black;margin-top: 900px;margin-left: -90px"><b><i><u>Contact Me</u></i></b></h1><hr>
	
	<form action="" method="POST">
	<div class="list">
		
	<div class="list1">	<input type="text" name="fname" placeholder="First Name" required="required" >	</div>
	<div class="list2">	<input type="text" name="mname" placeholder="Middle Name" required="required" >	</div>
	<div class="list3">	<input type="text" name="lname" placeholder="Last Name" required="required" > 	</div>
		
<div class="list4">  <input type="text" name="mnum" placeholder="Mobile Number" required="required">
</div>
<div class="list5"><input type="email" name="email" required="required" placeholder="Email">
</div>
<div class="list6"><textarea name="description" placeholder="Description : Minimum 20 characters ." required="required" style="margin-top: 30px;"></textarea></div>
<h1 align="center" style="font-size:15px;">
<input type="submit" name="csubmit"  style="height: 50px;width: 100px;background-color: green;color: white;margin-left: -60px;border: 0px solid black;border-radius: 30px;" id="csubmit"></h1></div></form></h1>
</div>
</div>
<footer>
		<hr><h1 align="center" style="font-size: 25px;">
		<form><a href="#div"><input type="button" value="Back to Top" style="color: black;background-color: bisque"></a></form><br></h1>
		&copyAll CopyRights Reserved<br>Designed by Manav Jain<br>
		<a href="https://wa.me/9998626184"><i class="fab fa-whatsapp" style="color: lightgreen;"></i></a>
		<a href="https://www.facebook.com/jain.manav.1"><i class="fab fa-facebook" style="color: #0066ff"></i></a>
		<a href="https://www.instagram.com/jmanav02/"><i class="fab fa-instagram" style="color: hotpink"></i></a>
		<a href="mailto:jm27504314@gmail.com"><i class="fas fa-envelope" style="color: #e62e00"></i></a>
		<a href="tel:9265983884"><i class="fas fa-phone" style="color: lightgreen"></i></a>
		</footer>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#ignore").click(function(){
			$(".subscribe").remove();
				// e.preventDefault();
		});

	});
	
</script>
</html>