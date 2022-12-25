<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

	

<?php
$a=1;
$s=1;
$sname="localhost";
$uname= "root";
$pass="saikiranrao";
$conn = new mysqli($sname, $uname, $pass);
$usern = $_POST["txt"];
$usere = $_POST["email"];
$userp = $_POST["pswd"];

$sql ="use carmax;";

$conn->query($sql);

$sql ="select usern from login where usern='$usern';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$a=10;
}



$sql ="insert into login(usern,usere,userp)values('$usern','$usere','$userp');";
if ($a==1) {
$conn->query($sql);
  
	



header("Location:./home.php");
exit();


} else {
echo"<link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap\" rel=\"stylesheet\">

	<link rel=\"stylesheet\" type=\"text/css\" href=\"./style.css\"><body>";
echo"<div class=\"main\">";  	
		echo"<input type=\"checkbox\" id=\"chk\" aria-hidden=\"true\">";
 echo"<div class=\"signup\">";
				echo"<form action=\"index.php\" method=\"post\">";
					echo"<label for=\"chk\" aria-hidden=\"true\">Sign up</label>";
					echo"<input type=\"text\" name=\"txt\" placeholder=\"User name\">";
					echo"<input type=\"email\" name=\"email\" placeholder=\"Email\">";
					echo"<input type=\"password\" name=\"pswd\" placeholder=\"Password\">";
					echo"<button type=\"submit\">Sign up</button>.<p id=\"p1\">Username is all ready used</p>";
				echo"</form>";
			echo"</div>";

			echo"<div class=\"login\">";
				echo"<form action=\"index1.php\" method=\"post\">";
					echo"<label for=\"chk\" aria-hidden=\"true\">Login</label>";
					echo"<input type=\"txt\" name=\"txt\" placeholder=\"Username\">";
					echo"<input type=\"password\" name=\"pswd\" placeholder=\"Password\">";
					echo"<button type=\"submit\">Login</button>";
				echo"</form>";
			echo"</div>";
	echo"</div>";
echo"</body>";
}
$conn->close();


?>			

</html>