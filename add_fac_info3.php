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

			#header{
				background-color: White;
				width:100%;
				height:110px;
			}
			#link{
			font-size: 20px;
			padding :0px 480px 0px 500px;
			}
			li {
 				 float: center;
				}
            li a {
  				display: block;
  				color: white;
  				text-align: center;
  				padding: 16px 16px;
  				text-decoration: none;
				}
			li a:hover {
  				background-color: #f2cf62;
               
			}
			ul {
 				 list-style-type: none;
  				 margin: 0;
  				 padding: 10px 35px 0px 50px;
  				 overflow: hidden;
  				 background-color: #333;
                   
            }
            #main{
				float:left;
				width:100%;
				height: 200px;
				background-color: gray;
				padding : 0px 0px 100px 0px;
			}


			#footer{
				clear:both;
				height: 200px;
				width: 100%;
				background-color: Black;
				color : White;


			}

			#sidebar-left, #main, #sidebar-right{
				min-height: 600px
			}
		</style>
		<title>Faculty 
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
	</head>
	<body>



		<div id="header">
            <center>

            <h1>
                <hr>
                Welcome Administrator! 
                
            </h1>
        </center>
		</div>

		<section class="background-radial-gradient overflow-hidden">
        <center>
			<br><br>
        <h1 style="color:white">Faculty Information Successfully Added!!</h1><br><br>
        <button>
            <ul>
                <center>
            <li><a href= "add_stud_info.php"><h3 style="align: center">Add another Faculty</h3></a></li>
			
        </center>
    </ul>
	<hr><hr>
	<ul>
		<center>
		<li><a href= "admin_page.php"> <h3 style= "align: center">Return to Admin Page</h3></a></li>
		</center>
		</ul>
        </button>
        </center>
		</section>
		
        
        
    
	</body>
	<footer>
<br>

<h2>Contact Info</h2>

<h6>www.collegeerp.com</h6>
<h6><b>WT MINI PROJECT</b></h6>
</footer>
</html>