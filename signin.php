<?php

$dbhost ="localhost";
$username = "root";
$email = "fagun115946@gmail.com"
$password = "123456";
$db = "newdb";

 mysql_connect = new mysqli("$dbhost","$email", "$username", "$password", "$dbname");
mysql_select_db(newdb);
if($conn){
	die("connection failed: ".mysql_connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "codeflix";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
	</script>
	
	<?php
}
else{
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}








?>