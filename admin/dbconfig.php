
<?php 
$username='root';
$pass='';
$server='localhost';
$db='music_site';
$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn)
{
die("connection error");
}
?>