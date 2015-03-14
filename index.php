<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	
		<title>Prologue by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<script>

function validateForm() 
{
event.preventDefault();
    var x = document.forms["myForm"]["fname"].value;
    var y = 0;
    var z = 0;
	var l = 0;
	var ans = 0;
	

    var res = x.split(" ");
    l = res.length;
   for(i=0; i<res.length;  i++)
{
   if (res[i] == "good" || res[i] == "GOOD") {
        
        
    y++; 
   }
   
   if (res[i] == "good." || res[i] == "Good.") {
        
        
    y++; 
   }
   
   if (res[i] == "amazing." || res[i] == "Amazing.") {
        
        
    y++; 
   }
   
   
   if (res[i] == "satisfactory" || res[i] == "Satisfactory" ) 
   
   {
        
        
    y++; 
   
   
   }
   
   
   if (res[i] == "satisfactory." || res[i] == "Satisfactory." ) 
   
   {
        
        
    y++; 
   
   
   }
   
   
   
   
   if (res[i] == "great" || res[i] == "Great") {
        
        
    y++; 
   }
   if (res[i] == "superiror" || res[i] == "superior.") {
        
        
    y++; 
   }
   
   if (res[i] == "excellent" || res[i] == "excellent.") {
        
        
    y++; 
   }
   
   if (res[i] == "fantabulous" || res[i] == "fantabulous.") {
        
        
    y++; 
   }
   
   if (res[i] == "splendid" || res[i] == "splendid.") {
        
        
    y++; 
   }
   
   if (res[i] == "like" || res[i] == "like.") {
        
        
    y++; 
   }
   
   if (res[i] == "magnificient" || res[i] == "magnificient.") {
        
        
    y++; 
   }
   
   
   
   
   if (res[i] == "not" && res[i+1] == "great.") 
   
   {
        
    
    y++;    
    y++;
    z--;
    z--;	
   
   }
   
   
   if (res[i] == "not" && res[i+1] == "bad.") 
   
   {
        
    y++;    
    y++;
    z--;
    z--;	
   
   }
   
   if ( res[i] == "not" && res[i+1] == "bad") 
   
   {
        
    y++;    
    y++;
    z--;
    z--;	
   
   }


  if (res[i] == "not" || res[i] == "NOT") {
        
    y--;    
    z++; 
   }

if (res[i] == "bad" || res[i] == "BAD") {
             
     z++; 
   }
   
   if (res[i] == "awful" || res[i] == "awful.") {
             
     z++; 
   }
   
  if (res[i] == "painful" || res[i] == "painful.") {
             
     z++; 
   }
if (res[i] == "sad." || res[i] == "sad,") {
             
     z++; 
   }
if (res[i] == "negative" || res[i] == "negative.") {
             
     z++; 
   }
if (res[i] == "rotten." || res[i] == "rotten,") {
             
     z++; 
   }
if (res[i] == "sorry" || res[i] == "sorry.") {
             
     z++; 
   }
if (res[i] == "crappy." || res[i] == "crappy,") {
             
     z++; 
   }
if (res[i] == "abominable." || res[i] == "abominable,") {
             
     z++; 
   }
if (res[i] == "hopeless." || res[i] == "hopeless,") {
             
     z++; 
   }
if (res[i] == "mediocre." || res[i] == "mediocre,") {
             
     z++; 
   }
   
   if (res[i] == "poor." || res[i] == "poor,") {
             
     z++; 
   }
   
   
}

if(y>z)
{
  ans = (y/(y+z))*100;
  
 
 document.getElementById("demo").innerHTML = "Positive Statement" + "<Br> " + "Total no of words are" + " " + l + "<br>" + "Percent positivity in the text is" + " " + ans + "%";
 document.getElementById("demo").style.color = "green";
 
 }

if(z>y)
{ 
  ans = (z/(y+z))*100;
 alert("The statement is negative");
document.getElementById("demo").innerHTML = "Negative Statement" + "<Br> " + "Total no of words are" + " " + l + "<br>" + "Percent negativity in the text is" + " " + ans + "%";
document.getElementById("demo").style.color = "red";
}


if(z==y)
{
alert("The statement is neutral");
document.getElementById("demo").innerHTML = "Neutral Statement";
}

}
</script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Honey Thakuria</h1>
							<p>Final Sem Project</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Tool</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Result Page</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

						
								<h2 class="alt">Welcome to <strong>Sentiment Analysis</strong> World.</h2>
								
								<h3><strong> Click Below to Analyse the text </strong> <br/> <br /> </h3>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							
							<footer>
							
								<a href="#portfolio" class="button scrolly">Analyse the text</a>
								
							</footer>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							
								<h2>Sentiment Analysis Tool</h2>
							
							
							<p>Enter Your text here to see the polarity of the text.
							</p>
						
							<form  name="myForm"  action="#about" onsubmit="return validateForm()" >
								
								<div class="row 50%">
									<div class="12u">
										<textarea name="fname" placeholder="Message"></textarea>
									</div>
								</div>
								
							
								<div class="row">
									<div class="12u">

								 		 
									</div>
								</div>
							</form>
							<a href="#about" onclick="validateForm()" class="button scrolly">Analyse the text</a>

					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Result of polarity</h2>
							</header>
                                  <div id="demo" >Click above button to see the polarity </div>
							<h2>  If you like our work, or If you have some suggestion, click below  </h2>
							<a href="#contact" class="button scrolly">Feedback</a>
								

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							
								<h2>Contact</h2>
							

							<p></p>
							 <?php
						include_once 'config.php'; 
						
					   ?>
					 
							
							<form method="post"  action="insert.php" method="post">
								<div class="row 50%">
									<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="text" name="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="submit" name="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				
			</div>

	</body>
</html>