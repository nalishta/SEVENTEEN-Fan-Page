<?php 
 
$koneksi = mysqli_connect("localhost","seventeen_db","scoupsey1995.","seventeen");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>