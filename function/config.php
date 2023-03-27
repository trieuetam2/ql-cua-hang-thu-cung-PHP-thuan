<?php
//ket noi toi database

<<<<<<< HEAD
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'shop';
=======
$servername = 'localhost';
$username = 'root';
$password = 'nguyen thanh tin';
$dbname = 'shop';
>>>>>>> 8d21157ac9c7ba749a927fa636ed8f0e76148e53

//connect database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check
if (!$conn) {
	echo 'loi ket noi ' . mysqli_connect_error();
}
	// else{
	// 	echo 'ket noi thanh cong';
	// }
