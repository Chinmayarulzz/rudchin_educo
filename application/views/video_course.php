             
<!DOCTYPE html>
<html lang="en">

  <head>

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
    height:40vh;
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

.video-container{
    display:flex;
    justify-content: space-around;
    height: 82vh;
    margin-top: 10vh;
    width: 100%;
}

.video-container iframe{
    width: 80%;
    border: 0;
}

.video-container iframe:hover, .video-container iframe:active{
    border: 1px dotted #a4c639;
    color: #a4c639;
}
    </style>
    <title>RudChin Educo</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/style1.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="bootstrap/css/style2.css">
    <link rel="stylesheet" href="bootstrap/css/style3.css">
    <link rel="stylesheet" href="bootstrap/css/owl.css">
	<link rel="stylesheet" href="fontawesome/css/brands.css">
	<link rel="stylesheet" href="fontawesome/css/brands.min.css">
	
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
            <li class="nav-item">
			<a class="nav-link active" href="dashboard.php">Home
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

    <!-- Page Content -->
    
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/h9X3R_y1Y94"></iframe>
    </div>

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
	<script src="https://kit.fontawesome.com/b558a0dd02.js" crossorigin="anonymous"></script>

  </body>
</html>