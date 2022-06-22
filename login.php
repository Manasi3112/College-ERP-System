<html>
    <head>
    <style>
body {
    padding: 0;
    margin: 0;
    background: #17202A ;
}
.navbar {
    background:#EBF5FB  
;
}
.nav-link,
.navbar-brand {
    color: #17202A ;
    cursor: pointer;
}
.nav-link {
    margin-right: 1em !important;
}
.nav-link:hover {
    color: #000 ;
}
.navbar-collapse {
    justify-content: flex-end;
}
footer{
    background:#EBF5FB;
    justify-content: flex-end;
    height: 130px;
    text-align:center
}

.background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
</style>
        <title>Login
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

    <body>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="images/AADM_Symbol.png" alt="My image"
			  height="80"
			  width="100"></a>
	    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
		    <span class="navbar-toggler-icon"></span>
	    </button>
      <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register1.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
   <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    
  <div class="container px-4 py-2 px-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
      <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Login<br/>
          <span style="color: hsl(218, 81%, 75%)">As College</span>
        </h1>
      </div>

      <div class="col-lg-6 lg-0 mb-5 mt-5 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            
          <form  action= "login2.php" method="POST">
            <!-- college name -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" name="clg_name" 
                placeholder="Enter college name" class="form-control" required/>
              </div>
              
              
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" name= "password" 
                class="form-control" placeholder="Enter Password " required/>
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4"  name="submit">
               Submit record
              </button>

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
    </body>
	<footer>
<br>

<h2>Contact Info</h2>

<h6>www.collegeerp.com</h6>
<h6><b>WT MINI PROJECT</b></h6>
</footer>
    
</html>