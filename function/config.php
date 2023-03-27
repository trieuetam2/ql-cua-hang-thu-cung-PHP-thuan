<?php
//ket noi toi database

$servername = 'localhost';
$username = 'root';
$password = 'abc';
$dbname = 'shop';

//connect database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check
if (!$conn) {
	echo 'loi ket noi ' . mysqli_connect_error();
}
	// else{
	// 	echo 'ket noi thanh cong';
	// }
