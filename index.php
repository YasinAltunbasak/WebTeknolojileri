<!DOCTYPE html>
<?php include("kontrol/veritabani.php") ?>
<html lang="en">
		 <head>
		 <title>Anasayfa - isparta.com</title>
		 <meta charset="utf-8">
		 <link rel="icon" href="img/favicon.ico">
		 <link rel="shortcut icon" href="img/favicon.ico" />
		 <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="css/slider.css">
		 <script src="js/jquery.js"></script>
		 <script src="js/jquery-migrate-1.1.1.js"></script>
		 <script src="js/superfish.js"></script>
		 <script src="js/sForm.js"></script>
		 <script src="js/jquery.jqtransform.js"></script>
		 <script src="js/jquery.equalheights.js"></script>
		 <script src="js/jquery.easing.1.3.js"></script>
		 <script src="js/tms-0.4.1.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		 <script src="js/jquery.ui.totop.js"></script>
		
		 <script>
			$(window).load(function(){
			$('.slider')._TMS({
							show:0,
							pauseOnHover:false,
							prevBu:'.prev',
							nextBu:'.next',
							playBu:false,
							duration:800,
							preset:'random', 
							pagination:false,//'.pagination',true,'<ul></ul>'
							pagNums:false,
							slideshow:8000,
							numStatus:false,
							banners:true,
					waitBannerAnimation:false,
				progressBar:false
			})	;
			 $( "#tabs" ).tabs();
		 
		$().UItoTop({ easingType: 'easeOutQuart' });
			});
			
			
			
		 </script>
		 <!--[if lt IE 8]>
			 <div style=' clear: both; text-align:center; position: relative;'>
				 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					 <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				 </a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
		 </head>
		 <body class="page1">
<!--==============================header=================================-->
 <header> 
	<div class="container_12">
		<div class="grid_12"> 
		<h1><a href="index.php"><img src="img/logo.png" alt="isparta"></a> </h1>
					
				 
					 <div class="clear"></div>
			</div>
					<div class="menu_block">
					 <nav	class="" >
						<ul class="sf-menu">
									 <li class="current"><a href="index.php">Ana Sayfa</a></li>
									 <li><a href="hakkimda.html">Hakkımda</a></li>
									 <li><a href="sehrimiz.html">Şehrim Isparta</a></li>
									 <li><a href="mirasimiz.html">Mirasımız</a></li>
									 <li><a href="giris.html">Kullanıcı Girisi</a></li>
									 <li><a href="iletisim.html">iletisim</a></li>
								 </ul>
							</nav>
					 <div class="clear"></div>
					 </div>
					 <div class="clear"></div>
	</div>
</header>

<style>

	
	</style>






	</head>
	<body>
	
	<div class="slideshow-container">
	
	<div class="mySlides fade">
	  <div class="numbertext">1 / 4</div>
	  <img src="img/davrazdagi.jpg" style="width:100%">
	  <div class="text"> davrazdagi </div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">2 / 4</div>
	  <img src="img/Isparta.jpg" style="width:100%">
	  <div class="text"> Isparta Meydan</div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">3 / 4</div>
	  <img src="img/egirdir.jpg" style="width:100%">
	  <div class="text">Eğirdir Gölü</div>
	</div>


	<div class="mySlides fade">
		<div class="numbertext">4 / 4</div>
		<img src="img/yazilikanyon3.jpg" style="width:100%">
		<div class="text">Yazılı Kanyon</div>
	  </div>
	
	<a class="prev" onclick="plusSlides(-1)">❮</a>
	<a class="next" onclick="plusSlides(1)">❯</a>
	
	</div>
	<br>
	
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	  <span class="dot" onclick="currentSlide(4)"></span> 
	</div>
	
	<script>
	let slideIndex = 1;
	showSlides(slideIndex);
	
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}
	
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}
	
	function showSlides(n) {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>

	
<!--=======content================================-->

	<div class="bottom_block">
		<div class="container_12">
			<div class="grid_2 prefix_2">
				<ul>
					<li><a href="index.php">Ana Sayfa</a></li>
					<li><a href="hakkimda.html">Hakkımda</a></li>
				</ul>
			</div>
			<div class="grid_2">
				<ul>
					<li><a href="sehrimiz.html">Şehrim Isparta</a></li>
					<li><a href="mirasimiz.html">Mirasımız</a></li>
				</ul>
			</div>
			<div class="grid_2">
				<ul>
					<li><a href="giris.html">Kullanıcı Girişi</a></li>
					<li><a href="iletisim.html">İletişim</a></li>
				</ul>
			</div>
			<div class="grid_2">
				<h4>Bize Ulaşın</h4>
				TEL: 000-000-00-00<br><a href="#">info@isparta.com</a>
			 
			</div>
		<div class="clear"></div>
		</div>
	</div>
<!--==============================footer=================================-->

</div>
<footer>		
	<div class="container_12">
	<div class="grid_12">
		<div class="socials">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
			<div class="copy">
		 Mayıs &copy; 2022 | Tüm Hakları Saklıdır | Website designed by Yasin Altunbaşak
		 </div></div>
		 <div class="clear"></div>
	</div>

</footer>

</body>
</html>