<?php
	$baglanti = mysqli_connect("localhost", "root", "", "cumledeanlam");
	if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");
	$tmp      = mysqli_query($baglanti, "SET NAMES 'utf8'");
?>