<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM data";
$result = $conn->query($sql);

$conn->close();
?>



<!DOCTYPE html>
<html>
	<head>
		<title>
			Show Results
		</title>
		<link href="styling.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="styleShow.css">
		<link rel="stylesheet" href="index.css">
	</head>

	<body background="./quran.jpg" style=" background-repeat:no-repeat;">
    
    	<header>
        	<!-- Its HTML5 Divison of the HTML Document-->
        </header>
        
        <main>
        	<div class="col-lg-10 col-xs-offset-1">
            	
                <div class="panel panel-default">
                  <div class="panel-heading">
                  	<h3 class="text-center" style="margin-left:40%;">Results	<input type="submit" id="Button8" value="Back" style="margin-left: 60%; width:20%; height:50px;" onclick="window.location='index.html';"></h3>
					
                  </div>
                  <div class="panel-body">
                  	<div class="col-lg-12 bg-success">
                        <div class="col-lg-2"> <h4>Name </h4></div>
                        <div class="col-lg-2"> <h4>Total Marks </h4></div>
                        <div class="col-lg-2"> <h4>Marks Obtained </h4></div>
                        <div class="col-lg-2"> <h4>Question 1 </h4></div>
                        <div class="col-lg-2"> <h4>Question 2 </h4></div>
                        <div class="col-lg-2"> <h4>Question 3 </h4></div>
                    </div>
					<hr>
                <?php 
					if ($result->num_rows > 0) 
					{
						while($row = $result->fetch_assoc()) 
						{    
							echo"<div class=".'col-lg-12'.">";
							echo"<div class=".'col-lg-2'."> ".$row['Editbox0']."</div>";
							echo"<div class=".'col-lg-2'."> ".$row['Editbox1']."</div>";
							echo"<div class=".'col-lg-2'."> ".$row['Editbox2']."</div>";
							echo"<div class=".'col-lg-2'."> ".$row['Editbox3']."</div>";
							echo"<div class=".'col-lg-2'."> ".$row['Editbox4']."</div>";
							echo"<div class=".'col-lg-2'."> ".$row['Editbox5']."</div>";
							echo"</div>";
							echo"<hr>";
						}
					}
					else
					{
						echo"<div class=".'col-lg-12'.">";
						echo"<p class=".'text-center'."> No Record Found! <p>";
						echo"</div>";
						
					}
						
				?>
                    
                    
                  </div>
                </div>
            
            </div>
        
        </main>
    
        <footer>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </footer>
	</body>

</html>