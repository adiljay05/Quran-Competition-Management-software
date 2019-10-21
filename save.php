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
else
{
	//echo "Connected Successfully"."<br>";
}
/*
echo $_REQUEST["Editbox0"]."<br>";
echo $_REQUEST["Editbox1"]."<br>";
echo $_REQUEST["Editbox2"]."<br>";
echo $_REQUEST["Editbox3"]."<br>";
echo $_REQUEST["Editbox4"]."<br>";
echo $_REQUEST["Editbox5"]."<br>";
*/


$Editbox0 = $_REQUEST["Editbox0"];
$Editbox1 = $_REQUEST["Editbox1"];
$Editbox2 = $_REQUEST["Editbox2"];
$Editbox3 = $_REQUEST["Editbox3"];
$Editbox4 = $_REQUEST["Editbox4"];
$Editbox5 = $_REQUEST["Editbox5"];
/*
echo "<br>";
echo "<br>";
echo $Editbox0;
echo "<br>";
echo $Editbox1;
echo "<br>";
echo $Editbox2;
echo "<br>";
echo $Editbox3;
echo "<br>";
echo $Editbox4;
echo "<br>";
echo $Editbox5;
echo "<br>";
*/

$sql = "INSERT INTO data (Editbox0,Editbox1,Editbox2,Editbox3,Editbox4,Editbox5)VALUES ('$Editbox0', '$Editbox1', '$Editbox2', '$Editbox3', '$Editbox4','$Editbox5')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Success.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>