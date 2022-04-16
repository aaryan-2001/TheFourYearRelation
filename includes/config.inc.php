<?php
	if(!isset($_SESSION)){
		session_start();
	}
  
 $conn=mysqli_connect("localhost","root","","minor_project_db");

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
