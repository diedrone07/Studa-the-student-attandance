  <?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html>
 <head>
  <link rel="shortcut icon" href="img/imrsss.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css"/>
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/main.css">
  <title>Student Attendance</title>
  
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
  <script src="js/loginpage.js" defer></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
          body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
        </style>


       
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg bg-body-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="opp"></div>
  <div class="container logcon">
   
    <h4 id="headname">Click here for <a href="stud.php">Student Dashboard</a></h4>
    <hr>
    <h2>For Faculty</h2>
    <div class="alert alert-danger hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    
    <div class="login_container">
        <div class="sidedoc">
          <!-- <div class="containerra"></div> -->
        </div>
        <div class="admit_box">

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Login')" id="defaultOpen">Login</button>
                <button class="tablinks" onclick="openCity(event, 'Signup')">Signup</button>
           
              </div>
              
              <div id="Login" class="tabcontent">
               
                <form id="login">
                    <div class="form-group">
                      <label>Email ID</label>
                      <input class="form-control" placeholder="Email" type="email" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>
                    <button class="btn btn-primary pull-right">Login</button>
                  </form>
              </div>
              
              <div id="Signup" class="tabcontent">
                <form id="signup">
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control" placeholder="Name" type="text" name="name">
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input class="form-control" placeholder="Phone" type="text" name="phone">
                    </div>
                    <div class="form-group">
                      <label>Email ID</label>
                      <input class="form-control" placeholder="Email" type="email" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" placeholder="Password" type="password" name="password">
                      <span class="help-block">Password should be 6 characters long.</span>
                    </div>
                    <div class="form-group">
                      <label>Re-type Password</label>
                      <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
                    </div>
                    <button class="btn btn-primary pull-right">Sign Up</button>
                  </form>
              </div>
              
            
        
        
        </div>
    </div>
           
        
           
         
  </div>
     <!-- FOOTER -->
     <footer class="footer-07">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="footer-heading"><a href="#" class="logo">StuDA.com</a></h2>
                    <p class="menu">
                        <a href="#">Home</a>
                        <a href="#">Agent</a>
                        <a href="#">About</a>
                        <a href="#">Listing</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                    </p>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This is made
                        with <i class="fa-solid fa-heart"></i> by <a style="color: rgb(85, 112, 232) !important;"
                            href="#" target="_blank">StuDA.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
   
    </div><!-- /.container -->

 </body>
</html>
