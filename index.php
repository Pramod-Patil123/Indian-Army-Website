
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="https://convertico.com/images/1551805442.0495/indian-army.ico " type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Indian Army</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<body
	<header>
		<h1>IndianArmy.com</h1>
		<h2>Salute To Our Brave Soldiers</h2>
	</header>
	<div class="topnav">
		<a class="active" href="#home"><i class="fa fa-fw fa-home"></i> Home</a> 
		<a href="#about"><i class="fa fa-fw fa-user"></i> About</a>
		<a href="#news"><i class="fa fa-youtube-play"></i> News</a>
		<a href="#gallery"><i class="fa fa-file-photo-o"></i> Gallery</a>
		<a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
	</div>
<!-- home section -->
	<a id="home"></a>
	<div>
    <div class="slideshow-container">
        <div class="mySlides fade">
			<img src="1.jpeg" style="width:100%;position: relative;">
			<div class="text">BRAVERY</div>
		</div>
		<div class="mySlides fade">
			<img src="2.jpeg" style="width:100%;position: relative;">
			<div class="text">SACRIFICE</div>
		</div>
		<div class="mySlides fade">
			<img src="3.jpeg" style="width:100%;position: relative;">
			<div class="text"> INDIAN ARMY LOVER</div>
		</div>
		<div class="mySlides fade">
			<img src="bg.jpg" style="width:100%;position: relative;">
			<div class="text">WE ARE PROUD TO BE AN INDIAN</div>
		</div>

		<marquee class="scroll-text" behavior="scroll" direction="left">“ Either I will come back after hoisting the tricolor, or I will come back wrapped in it, but I will be back for sure. “</marquee>
        </div>
	<br>
    <div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>

	
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
<!-- about section -->
<a id="about"></a>
<div class="about-image">
	<h1 style="font-size:75px;padding-right:10px;font-family:verdana;color:#e92e37;text-align:center;">INDIAN MILITARY</h1>
	<h3 style="font-size:30px;padding-right:10px;font-family:verdana;text-align:center;color: aliceblue;">Unsung Sacrifies For Nation<br>By Indian Heroes</h3>

	<div class="header" title="About Indian Army">
		<img class="header_img" src="indian army logo.png"; alt="logo" style="float:right;width: 200px;height: 200px;" />
	</div>
</div>
<!-- news section -->
<a id="news"></a>
<div class="news-image">
	    <h1 style="font-size:50px;color:#333;text-align:center;text-shadow: 2px 2px 4px #fd0000;">INDIAN MILITARY NEWS</h1>
		<hr>
	
	<div class="video-responsive">
		<iframe height="300px" width="700px" src="VID-20231218-WA0002.mp4"  type="video/mp4" style="display:block" frameborder="0" allowfullscreen></iframe>
		<img class="header_img" src="OIP.jpg"; alt="logo" style="float:right;width: 200px;height: 600px;" />
	</div>
	<p class="animation"> SALUTE TO OUR BRAVE FREEDOM FIGHTERS !!!</p>
</div>
<!-- gallery section -->
<a id="gallery"></a>
<div class="gallery-image">
	<h1 style="font-size:50px;color:#d3d2d2;text-align:center;text-shadow: 2px 2px 4px #fd0000;">INDIAN MILITARY GALLERY</h1>
	<hr>
	<div class="gallery">
		<a href="logo.jpeg"><img src="logo.jpeg"></a>
		<a href="https://cdn.pixabay.com/photo/2014/10/02/06/34/war-469503_1280.jpg"><img src="https://cdn.pixabay.com/photo/2014/10/02/06/34/war-469503__340.jpg"></a>
		<a href="https://cdn.pixabay.com/photo/2016/03/27/07/38/dangerous-1282330_1280.jpg"><img src="https://cdn.pixabay.com/photo/2016/03/27/07/38/dangerous-1282330__340.jpg"></a>
		<a href="5.jpeg"><img src="5.jpeg"></a> 
		<a href="https://cdn.pixabay.com/photo/2016/06/09/23/46/war-1447021_1280.jpg"><img src="https://cdn.pixabay.com/photo/2016/06/09/23/46/war-1447021__340.jpg"></a> 
		<a href="army1.jfif"><img src="army1.jfif"></a>
	</div>
</div>
<!-- contact section -->
<a id="contact"></a>
<div class="contact-image">
	<div class="container">
		<div style="text-align:center">
			<h1 style="font-size:50px;color:#333;text-align:center;text-shadow: 2px 2px 4px #fd0000;">CONTACT INDIAN MILITARY</h1>
			<hr>
			<p></p>
		</div>
		<div class="row1">
			<div class="column1">
				<img src="https://images.pexels.com/photos/36785/soldier-military-uniform-american.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
			</div>
			<div class="column1">

				 <form role="form" name="ContactForm" id="ContactForm" action="registration.php" method="post">
					<label for="fname"><b>First Name</b></label>
					<input name="fname" id="fname" required="required" type="text" placeholder="Enter Your Full Name" />
				    <label for="mail"><b>Email Address</b></label>
					<input name="email" id="email" required="required" type="email" placeholder="Enter Your Email Address"/>
					<label for="phone"><b>Mobile Number</b></label>
					<input name="mobile" id="mobile" required="required" type="phone" placeholder="Enter Your Mobile Number"/>
					<label for="message"><b>Message</b></label>
					<textarea name="message" id="message" placeholder="Enter Your Message" style="height:100px"></textarea>
                    <input name="submit" type="submit" value="Send a Mail & Save" />
				</form>
			</div>
		</div>
	</div>
</div>
 <footer><small>&copy; developer :- pramod patil </small> </footer> 

 <?php
	include ('registration.php');
 ?>
</body>

