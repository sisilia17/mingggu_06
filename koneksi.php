<?php
$host="localhost";
$user="root";
$password="";
$db="belajar_ajax";

$kon = mysql_connect($host,$user,$password,$db);
if(!$kon){
	die("Koneksi gagal:".mysql_connect_error());
}
?>