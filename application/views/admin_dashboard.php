
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Direction-Aware Hover Effect with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.97074.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b558a0dd02.js" crossorigin="anonymous"></script>
	<style>
        $font-family:   "Roboto";
$font-size:     14px;

$color-primary: #ABA194;

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: $font-family;
    font-size: $font-size;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #000000 10%, #000000 90%);
    height: 100vh
}

.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
    height:42vh;
}

.user__header {
    text-align: center;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
    font-size: $font-size;
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}

.form {
    margin-top: 30vh;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    transition: 0.3s;
    color:#ffffff;
    background:transparent;
    text-decoration:underline #000000;
    border:1px solid #a4c639;
    
    &:focus {
        background: darken(#fff, 3%);
    }
}

.form__input:focus{
  border: 2px solid #ffffff;
  background: #a4b62d;
  color: #a4c639;
}

.btn {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    border: 2px solid #a4c639;
    color: #a4c639;
    background: transparent;
    transition: 0.3s;
    
    &:hover {
        background: #a4c639;
        color: #ffffff;
    }
}

.btn:hover{
  background: #a4c639;
  color: #ffffff;
}

@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}
.container ul{
	display:flex;
	flex-flow: row wrap;
	justify-content: space-around;
}

.container ul li{
	padding: 10px;
}

.container ul li a div{
	width: 13vw;
}

.sub-header .container .row{
	display: flex;
	margin-left: -9vw;
}

.da-thumbs li:hover{
	border: 1px solid #a4c639;
	border-radius: 10%;
}

.da-thumbs li a{
	color:#a4c639;
	opacity: 85%;
}

.da-thumbs li a:hover{
	opacity: 100%;
}

.container .right-icons li {
    padding: 0;
}

.da-thumbs li a img{
	width: 18vw;
	height: 18vh;
}

.btns{
	justify-content: space-evenly;
}

.btns .btn{
	border: 1px solid #a4c639;
	margin: 1px;
	padding: 1px;
}

.btn-add{
	margin: 1px;
	padding: 1px;
}

</style>
    </head>
    <body>
	<title>RudChin Educo</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/style1.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="bootstrap/css/style2.css">
<link rel="stylesheet" href="bootstrap/css/style3.css">
<link rel="stylesheet" href="bootstrap/css/owl.css">
<link rel="stylesheet" href="fontawesome/css/brands.css">
<link rel="stylesheet" href="fontawesome/css/brands.min.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
	<div class="jumper">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- Header -->
<div class="sub-header">
  <div class="container">
	<div class="row">
	  <div class="col-md-8 col-xs-12">
		<ul class="left-info">
		  <li><a href="#"><i class="fa fa-envelope"></i>contact@company.com</a></li>
		  <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
		</ul>
	  </div>
	  <div class="col-md-4">
		<ul class="right-icons">
		  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	  </div>
	</div>
  </div>
</div>

<header class="">
  <nav class="navbar navbar-expand-lg">
	<div class="container">
	  <a class="navbar-brand" href="homepage.php"><h2>RudChin<em> Educo</em></h2></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="dashboard.php">Home
			  <span class="sr-only">(current)</span>
			</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="blog.php">Blog</a>
		  </li>

		  <li class="nav-item">
			<a class="nav-link" href="about.php">About Us</a>
		  </li>

		  <li class="nav-item">
			<a class="nav-link" href="team.php">Authors</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="contact.php">Contact Us</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="edit_profile.php">USER</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="homepage.php">Log Out</a>
		  </li>
		</ul>
	  </div>
	</div>
  </nav>
</header>
    

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center" style="visibility:hidden;">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Employee Table</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>id</th>
						      <th>email</th>
						      <th>Name</th>
						      <th>Approve/Reject</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>markotto@email.com</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>jacobthornton@email.com</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Larry</td>
						      <td>the Bird</td>
						      <td>larrybird@email.com</td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td>John</td>
						      <td>Doe</td>
						      <td>johndoe@email.com</td>
						    </tr>
						    <tr>
						      <th scope="row">5</th>
						      <td>Gary</td>
						      <td>Bird</td>
						      <td>garybird@email.com</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

<script src="https://kit.fontawesome.com/b558a0dd02.js" crossorigin="anonymous"></script>
        <div class="container" style="margin:15vh;">
		<!-- Codrops top bar -->
		<div class="codrops-top clearfix" style="display:none;">
                <a href="http://tympanus.net/Tutorials/SlideshowJmpress/">
                    <strong>&laquo; Previous Demo: </strong>Slideshow with jmpress.js
                </a>
                <span class="right">
                    <a href="http://tympanus.net/codrops/2012/04/09/direction-aware-hover-effect-with-css3-and-jquery/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			<header class="clearfix" style="display:none;">
				<span>Tips &amp; Tricks</span>
				<h1>Direction-Aware <span>Hover Effect</span></h1>
				<nav class="codrops-demos">
					<a href="index.html">Default</a>
					<a href="index2.html">Delay</a>
					<a class="current-demo" href="index3.html">Inverse</a>
				</nav>
				<p>Here we use the inverse direction.</p>
			</header>
			<section>
				<button class="btn btn-add">ADD COURSE</button>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="http://dribbble.com/shots/505046-Menu">
							<img src="images/video1.png" />
							<div><span>Menu by Simon Jensen</span></div>
							<div class="btns" style="display:flex;">
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/504336-TN-Aquarium">
							<img src="images/video2.png" />
							<div><span>TN Aquarium by Charlie Gann</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/504197-Mr-Crabs">
							<img src="images/video3.png" />
							<div><span>Mr. Crabs by John Generalov</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
							<img src="images/video4.png" />
							<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>	
						<a href="http://dribbble.com/shots/503058-Ice-Cream-nom-nom">
							<img src="images/video5.png" />
							<div><span>Ice Cream - nom nom by Eight Hour Day</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502927-My-Muse">
							<img src="images/video6.png" />
							<div><span>My Muse by Zachary Horst</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502538-Natalie-Justin-Cleaning">
							<img src="images/video7.png" />
							<div><span>Natalie & Justin Cleaning by Justin Younger</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502523-App-Preview">
							<img src="images/video8.png" />
							<div><span>App Preview by Ryan Deshler</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/501695-Cornwall-Map">
							<img src="images/video9.png" />
							<div><span>Cornwall Map by Katharina Maria Zimmermann</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/500861-final-AD-logo">
							<img src="images/video10.png" />
							<div><span>final AD logo by Annette Diana</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/500369-Land-Those-Planes">
							<img src="images/video11.png" />
							<div><span>Land Those Planes by Lee Ann Marcel</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/497795-Seahorse">
							<img src="images/video12.png" />
							<div><span>Seahorse by Trevor Basset</span></div>
							<div class="btns" style="display:flex;">
								
								<button class="btn btn-edit">EDIT</button>
								<button class="btn btn-del">DELETE</button>
							</div>
						</a>
					</li>
				</ul>
			</section>
        </div>
		<script type="text/javascript" src="bootstrap/jquery/jquery_min.js"></script>
		<script type="text/javascript" src="bootstrap/js/hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
					hoverDelay : 50,
					inverse : true
				}); } );

			});
		</script>

<!-- Footer Starts Here -->
<footer>
  <div class="container">
	<div class="row">
	  <div class="col-md-3 footer-item">
		<h4>Blog Website</h4>
		<p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
		<ul class="social-icons">
		  <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	  </div>
	  <div class="col-md-3 footer-item">
		<h4>Useful Links</h4>
		<ul class="menu-list">
		  <li><a href="#">Vivamus ut tellus mi</a></li>
		  <li><a href="#">Nulla nec cursus elit</a></li>
		  <li><a href="#">Vulputate sed nec</a></li>
		  <li><a href="#">Cursus augue hasellus</a></li>
		</ul>
	  </div>
	  <div class="col-md-3 footer-item">
		<h4>Additional Pages</h4>
		<ul class="menu-list">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">About Us</a></li>
		  <li><a href="#">Blog</a></li>
		  <li><a href="#">Contact Us</a></li>
		</ul>
	  </div>
	  <div class="col-md-3 footer-item last-item">
		<h4>Contact Us</h4>
		<div class="contact-form">
		  <form id="contact footer-contact" action="" method="post">
			<div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12">
				<fieldset>
				  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
				</fieldset>
			  </div>
			  <div class="col-lg-12 col-md-12 col-sm-12">
				<fieldset>
				  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
				</fieldset>
			  </div>
			  <div class="col-lg-12">
				<fieldset>
				  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
				</fieldset>
			  </div>
			  <div class="col-lg-12">
				<fieldset>
				  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
				</fieldset>
			  </div>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>
</footer>

<div class="sub-footer">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<p>
			Copyright © 2020 Company Name
			- Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
		</p>
	  </div>
	</div>
  </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="bootstrap/jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="bootstrap/js/custom.js"></script>
<script src="bootstrap/js/owl.js"></script>
<script src="bootstrap/js/slick.js"></script>
<script src="bootstrap/js/accordions.js"></script>

<script language = "text/Javascript"> 
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
  if(! cleared[t.id]){                      // function makes it static and global
	  cleared[t.id] = 1;  // you could use true and false, but that's more typing
	  t.value='';         // with more chance of typos
	  t.style.color='#fff';
	  }
  }
</script>
    </body>
</html>