<html>
  <head>
		<style>
			
			body{
    padding: 0;
    margin: 0;
    background: #17202A ;
}

footer{
    background:#EBF5FB;
    justify-content: flex-end;
    height: 130px;
    text-align:center
}
.navbar{
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
.navbar-collapse{
    justify-content: flex-end;
}
.image{
    height:100px;
	width:100px;
    padding-left:400px;
    align-items: right;
        justify-content: right;
}
.background-radial-gradient {
      height:100%;
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

		</style>
		<title>student-login
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

	</head>
	<body>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
            
			
            <center>
			<hr>
            <h1>
                Login as Student
            </h1>
            <hr>
        </center>
		<h2 style="text-align: right"><a href= "login_as.php">Back</a></h2>
	

		<!-- <div id="main">
        <center>
			
            <hr/>
			<form action= "admin2.php" method="POST">
				
			username: <input type="text" placeholder="Enter username" name="username" required/><br/>
			password: <input type="password" placeholder="Enter Password " name="password" required/><br/>
			<input type="submit" value="Submit Record"/>

			</form>

            </center>

		</div> -->
		<section class="background-radial-gradient overflow-hidden">
    
  <div class="container px-4 py-2 px-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
	<div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">

      </div>

      <div class="col-lg-6 lg-0 mb-5 mt-5 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
	
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
         
          <form  action= "login_stu2.php" method="POST">
            <!-- college name -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" name="stu_id" 
                placeholder="Enter Student ID" class="form-control" required/>
              </div>
              
              
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" name= "pass" 
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
		
	</body>
	<footer>
<br>

<h2>Contact Info</h2>

<h6>www.collegeerp.com</h6>
<h6><b>WT MINI PROJECT</b></h6>
</footer>
</html>