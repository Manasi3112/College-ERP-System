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
	#footer{
				clear:both;
				height: 200px;
				width: 100%;
				background-color: Black;
				color : White;


			}

		</style>
			<title>College Info Page
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
		<h2 style="text-align: right"><a href= "login_as.php">Log Out</a></h2>
		</div>

		<section class="background-radial-gradient overflow-hidden">
        <div id="content">
                <center>
            
                <form method="POST" action="about_clg_info2.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div><br><br><br><br><br><br>
                <h1 style="color:white">Upload College Symbol: <input type="file" name="image">
                </div>
                <div>
                    <br><button type="submit" name="upload">Upload</button>
                </div>
                
            </form>
            </center>
        </div>
        
    
	</body>
	
</html>