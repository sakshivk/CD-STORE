<?php
ob_start();
mysql_connect("localhost","root","");
mysql_select_db("cd");
echo $y=$_GET['a'];
$ab=$_POST['ct'];
$b=$_POST['ar'];
$c=$_POST['an'];
$d=$_POST['cp'];
$e=$_POST['da'];
$eee=$_POST['date1_year']."-".$_POST['date1_month']."-".$_POST['date1_day'];  
$uu="update table100 set CD_TYPE='$ab',ARTIST='$b',ALBUM_NAME='$c',CD_PRICE='$d',DATE='$eee' where id='$y'";
$ee=mysql_query($uu);


if($ee>0)
{
header("location:search.php?msg=updation success");
}
else
{
header("location:search.php?msg=updation fail");
}
?>


