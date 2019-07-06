<?php
mysql_connect("localhost","root","");
mysql_select_db("cd");
$a=$_POST['ct'];
$b=$_POST['ar'];
$c=$_POST['an'];
$d=$_POST['cp'];

$eee=$_POST['date1_year']."-".$_POST['date1_month']."-".$_POST['date1_day'];  
$in="insert into table100(CD_TYPE,ARTIST,ALBUM_NAME,CD_PRICE,DATE)values('$a','$b','$c','$d','$eee')";
$z=mysql_query($in);
if($z>0)
{
header("location:cd1.php?msg=insertion success");
}
else
{
header("location:cd1.php?msg=insertion fail");
}
?>


