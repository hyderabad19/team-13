<!doctype html>
<html>
<head>
	<title>event</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styletemp.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<div class="container-main-wrapper">
		<header class="header-wrapper">
			<div class="container">
				
				<div class="header-menu-wrapper" >
					<div class="brand-logo">
						<img class="img-responsive" src="images/loop.png" alt="image">
					</div>
					<div class="main-menu">
						<ul class="nav navbar-nav ">
							<li ><a href="loop.html">HOME</a></li>
							<li ><a href="clusters.php">CLUSTERS</a></li>
							<li ><a href="schools.html">SCHOOLS</a></li>
							<li ><a href="resource.html">RESOURCE</a></li>
							<li ><a href="event.html">EVENTS</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="content-main-wrapper">
				<div class="slideshow-container" align="center" >
						<div class="mySlides fade">
							<img src="images/loop1.jpg" style="width:50%" >
							<div class="text">EVENT</div>
					  </div>

					  <div class="mySlides fade">
								<img src="images/loop2.jpg" style="width:50%" >
								<div class="text">EVENT</div>
					  </div>
					  
					  <div class="mySlides fade">
							<img src="images/loop3.jpg" style="width:50%" >
							<div class="text">EVENT</div>
						</div>

						<div class="mySlides fade">
							<img src="images/loop4.jpg" style="width:50%" >
							<div class="text">EVENT</div>
					  </div>

					  <div class="mySlides fade">
							<img src="images/loop5.jpg" style="width:50%" >
							<div class="text">EVENT</div>
					  </div>
						
					  <div class="mySlides fade">
						  <img src="images/sports.jpg" style="width:50%" >
						  <div class="text">SPORTS EVENT</div>
						</div>
						
						<div class="mySlides fade">

						  <img src="images/quiz.jpg" style="width:50%">
						  <div class="text">QUIZ EVENT</div>
						</div>
						
						<div class="mySlides fade">
						
						  <img src="images/Debate1.jpg" style="width:50%">
						  <div class="text">DEBATE EVENT</div>
						</div>
						
						</div>
						<br>
						
						<div style="text-align:center">
						  <span class="dot"></span> 
						  <span class="dot"></span> 
						  <span class="dot"></span> 
						</div>
						
						<script>
						var slideIndex = 0;
						showSlides();
						
						function showSlides() {
						  var i;
						  var slides = document.getElementsByClassName("mySlides");
						  var dots = document.getElementsByClassName("dot");
						  for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";  
						  }
						  slideIndex++;
						  if (slideIndex > slides.length) {slideIndex = 1}    
						  for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						  }
						  slides[slideIndex-1].style.display = "block";  
						  dots[slideIndex-1].className += " active";
						  setTimeout(showSlides, 2000); // Change image every 2 seconds
						}
						</script>

			</div>	
		</div>
		<footer class="footer-main-wrapper">
			<div class="footer-links-wrapper">
				<div class="container">
					<div class="footer-links">
						<h2>Contact Deatils</h2><br>
						<ul>
				
							<li>Loop Education Foundation</li>
							<li>Hyderabad,Telangana</li>
							<li>Call us: +91 8886171701</li>
							<li class="special">Email:conatact@loopeducation.org</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copy">
				<div class="container">
					<p>Copyright &copy; Domain <span> TEAM 13<sapn></p>
				</div>
			</div>			
		</footer>
	</div>
</body>
</html>