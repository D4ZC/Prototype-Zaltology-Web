<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animation-1.css" rel="stylesheet">
    <title>ZALTOLOGY</title>
  </head>
  <body>
  	<div class="mySearchbar" style="display:none" id="mySearchbar">
		<div class="container">
			<form action="/action_page.php">
			  <input type="text" placeholder="Search.." name="search" class="form-control custome-input">
			  <button type="submit" class="btn btn-filter"><i class="fa fa-search"></i></button>
			</form>
			 <button onclick="w3_close()" class="myclosebtn"><i class="fa fa-times"></i></button>
		</div>
    </div>
    
   <nav class="navbar navbar-expand-md secound-head top-nav">
	<div class="container">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="shope.html">Articulos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="blog.html">Ubicación</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact-us.html">Contacténos</a>
		      </li>
		    </ul>
		  <a class="navbar-brand" href="#"><strong>ZALTOLOGY</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>
			<ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fa fa-heart-o"></i></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#" onclick="w3_open()"><i class="fa fa-search"></i></a>
		      </li>
			  <li class="nav-item ">
		        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
		      </li>
		    </ul>
		  </div>	
	</div>
</nav>




<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask flex-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-7 col-12 order-md-1 order-2">
                <h4>Expertos en Dispositivos Móviles <br>
                  </h4>
                <p>Tenemos la solución indicada para tu dispositivo, desde el centro de carga hasta el remplazo de tu pantalla. Dispositivo mojado - Dispositivo bloqueado - Libreración de compañia entre otros más servicios.</p>
                <a href="#">Cotizar Reparacion</a> </div>
              <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://cdn.pixabay.com/photo/2020/04/24/14/49/smartphone-5087176_1280.png" class="mx-auto" alt="slide"></div>
            </div>
          </div>
        </div>
      </div>
      
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  <!--slide end--> 


<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="footer-section">
					<h6>Compañia</h6>
					<p>ZALTOLOGY es un pequeño taller formado por entusiastas de la tecnologia
                        y los teléfonos celulares.
                    </p>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="footer-section">
					<h6>Nuestros servicios</h6>
					<div class="service-link">
						<a href="#">SERVICIOS</a>
						<a href="#">UBICACION</a>
						<a href="#">CONTACTO</a>
					</div>
				</div>
			</div>
	<div class="copy-write">
		<p>Copy right @ ZALTOLOGY all right reserve</p>
	</div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/wow.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script>
		// Sticky Header
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$(".top-nav").addClass("light-header");
		} else {
			$(".top-nav").removeClass("light-header");
		}
	});

	// Year for copy content
	$(function(){
	var theYear = new Date().getFullYear();
	$('#year').html(theYear);
	});
	</script>
	<script>
		function w3_open() {
			document.getElementById("mySearchbar").style.width = "100%";
			document.getElementById("mySearchbar").style.height = "50px";
			document.getElementById("mySearchbar").style.display = "block";
		}
		function w3_close() {
			document.getElementById("mySearchbar").style.display = "none";
		}
    </script>
    

<style>

    $('#myCarousel').carousel({
        interval: 3000,
    })
    .top-nav {
        height: 80px;
        transition: 0.5s ease-in;
        -webkit-transition: 0.5s ease-in;
        -moz-transition: 0.5s ease-in;
    }
    .top-nav .navbar-nav li .nav-link {
        color: #fff;
        font-size: 14px;
        padding:29px 15px 15px;
        font-weight: 600;
        text-transform: uppercase;
        transition: 0.5s ease-in;
        -webkit-transition: 0.5s ease-in;
        -moz-transition: 0.5s ease-in;
    }
    .mySearchbar{
        position:fixed;
        top:0;
        left:0;
        height:60px;
        width:100%;
        background-color:#f6f6f6;
        z-index:9999;
        transition:ease 0.5s;
        padding:5px 10px;
    }
    .mySearchbar form{
        display:flex;
        width:100%; 
    }
    .mySearchbar .custome-input{
        width:100%;
    }
    .myclosebtn{
        position:absolute;
        top:10px;
        left:10px;
        color:#000;
        font-size:16px;
        box-shadow:0px 0px 0px;
        border:0px;
    }
    .top-nav li a.nav-link:hover, .top-nav .nav-item.active a.nav-link{
        color: #35cbdf;
        transition: 0.5s ease-in;
        -webkit-transition: 0.5s ease-in;
        -moz-transition: 0.5s ease-in;
    }
    .top-nav .navbar-brand{
        font-size: 28px;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
    }
    .top-nav.light-header{
        height: 60px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.23);
        transition: 0.5s ease-in;
        -webkit-transition: 0.5s ease-in;
        -moz-transition: 0.5s ease-in;
        z-index:99999;
    }
    .top-nav.light-header .navbar-brand{
        color: #212121;
    }
    .top-nav.light-header .navbar-nav li .nav-link {
        color: #212121;
        padding: 10px 10px;
        transition: 0.5s ease-in;
        -webkit-transition: 0.5s ease-in;
        -moz-transition: 0.5s ease-in;
    }
    .top-nav.light-header li a.nav-link:hover, .top-nav.light-header .nav-item.active a.nav-link{
        border-bottom: 0px solid #35cbdf;
        color: #35cbdf;
        transition: 0.5s ease-in;
        -webkit-transition: 0.5s ease-in;
        -moz-transition: 0.5s ease-in;
    }
    .nav-item::after{content:'';display:block;width:0px;height:2px;background:#35cbdf;transition: 0.5s;}
    .nav-item:hover::after{width:100%;}
    .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link,.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover{color:#35cbdf;}
    .nav-link{padding:15px 5px;transition:0.2s;}
    .secound-head .navbar-nav li .nav-link{
        color:#000;
    }
    * start login page css */
    .secound-head .navbar-nav li .nav-link{
        color:#000;
    }
    .secound-head .navbar-brand{
        color:#000;
    }
    .secound-head.light-header{
        position:fixed;
        width:100%;
        background:#fff;
        z-index:99999;
        transition:ease 0.5s;
    }
    .login-page{
        background: #f6f6f6;  /* fallback for old browsers\
        background: -webkit-linear-gradient(to bottom, #2399f4, #12D8FA, #1FA2FF);  /* Chrome 10-25, Safari 5.1-6 
        background: linear-gradient(to bottom, #2399f4, #12D8FA, #1FA2FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        padding:40px 0px;
        min-height:450px;
        position:relative;
        display:inline-flex;
        width:100%;
    }
    .log-box{
        border-radius:10px;
        min-height:400px;
        box-shadow:0px 0px 10px #ccc;
        display:inline-block;
        width:100%;
    }
    .logo-back{
        background: url("../img/log-img.png");
        background-size: auto auto;
        display: inline-block;
        width: 100%;
        min-height: 450px;
        align-items: center;
        justify-content: center;
        height: 100%;
        border-radius: 10px 0px 0px 10px;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .log-content{
        padding:40px 20px 0px;
        display:inline-block;
        width:100%;
        background-color:#fff;
        min-height:460px;
        border-radius:0px 10px 10px 0px;
    }
    .myr-top{
        margin-top:15px;
    }
    .log-content .log-body{
        margin-top:50px;
    }
    .log-content label{
        margin:0px;
        font-family:Poppins-R;
        font-size:14px;
        display:none;
    }
    .log-content .custom{
        border-bottom:1px solid #000;
        padding:10px 10px 10px 0px
    }
    .log-btn{
        padding-bottom:20px;
    }
    .btn-theme1{
        font-size:16px;
        font-family:Poppins-R;
        padding:10px 20px;
        background-color:#35cbdf;
        color:#fff;
        border:1px solid transparent;
        border-radius:50px;
        transition:ease 0.5s;
    }
    .btn-theme1:hover{
        color:#35cbdf;
        background-color:#fff;
        border:1px solid #000;
    }
    .log-bottom-cotent{
        margin-top:28%;
    }
    /* end login page css */
    .copy-write{
        display:none !important;
    }
    .footer{
        background:#444;
        background-size:cover;
        display:inline-block;
        width:100%;
        padding:40px 0px 0px;
    }
    .footer-section h6{
        border-bottom:1px solid #FFF;
        padding-bottom:10px;
        margin-bottom:10px;
        color:#fff;
    }
    .footer-section p{
        font-size:12px;
        font-family:Poppins-L;
        line-height:26px;
        color:#fff;
    }
    .service-link a{
        display:inline-block;
        width:100%;
        color:#fff;
        transition:ease 0.2s;
        padding:5px 0px;
    }
    .service-link a:hover{
        color:#35cbdf;
    }
    .custom{
        border:0px;
        height:40px;
        box-shadow:0px 0px 0px;
        border-radius:0px;
        border-bottom:1px solid #fff;
        background-color:transparent;
        color:#fff;
    }
    .custom:hover, .custom:focus{
        background-color:transparent;
        box-shadow:0px 0px 0px;
        border-bottom:1px solid red;
    }
    .custome-input{
        border:0px;
        height:40px;
        box-shadow:0px 0px 0px;
        border-radius:0px;
        border-bottom:1px solid #000;
        background-color:transparent;
        color:#000;
    }
    .custome-input:hover, .custome-input:focus{
        background-color:transparent;
        box-shadow:0px 0px 0px;
        border-bottom:1px solid #35cbdf;
    }
    .form-group a{
        margin-top:10px;
    }
    .copy-write{
        background-color:#e1e1e1;
        padding:5px 0px;
        display:inline-block;
        width:100%;
        margin-top:20px;
        text-align:center;
    }
    .copy-write p{
        margin:0px;
    }
    .latest-section{
        padding:30px 0px;
            margin-top:0px;
    }

    #myCarousel .carousel-item .mask {
    position: absolute;
    top: 0;
	left:0;
	height:100%;
    width: 100%;
    background-attachment: fixed;
}
#myCarousel h4{
	font-size:50px;
	margin-bottom:15px;
	color:#FFF;
	line-height:100%;
	letter-spacing:0.5px;
	font-weight:600;
}
#myCarousel p{
	font-size:18px;
	margin-bottom:15px;
	color:#d5d5d5;
}
#myCarousel .carousel-item a{background:#F47735; font-size:14px; color:#FFF; padding:13px 32px; display:inline-block; }
#myCarousel .carousel-item a:hover{background:#394fa2; text-decoration:none;  }

#myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;} 
#myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;} 
#myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
#myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
#myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
#myCarousel .container {max-width: 1430px;  }
#myCarousel .carousel-item{height:100%; min-height:550px; }
#myCarousel{position:relative; z-index:1; background:url(https://i.imgur.com/6axE29k.jpg) center center no-repeat; background-size:cover; }

.carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color: #f47735; }


.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	opacity: 1
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
	opacity: 0
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}
@supports (transform-style:preserve-3d) {
	.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform:translate3d(0, 0, 0);
	transform:translate3d(0, 0, 0)
	}
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}


 
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}


</style>