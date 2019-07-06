

<?php
ob_start();
mysql_connect("localhost","root","");
mysql_select_db("cd");
echo $y=$_GET['aa'];
$y1="select*from table100 where id='$y'";
$y2=mysql_query($y1);
$f=mysql_fetch_array($y2);
?>



<html>
<head>
<script language="javascript" src="js/calendar.js"></script>
<style type="text/css">
#div0
{
width:100%;
height:100%;
background-image:url('images-7.jpeg');
border-radius:100px;
}
#div1
{
width:100%;
height:50%;

}
#div2
{
width:1000px;
height:350px;
background-image:url('images-4.jpeg');

}
</style>
</head>
<body>
<div id="div0">
<div id="div1">
<center><img src="kk.png" height="150" width="700" style="margin-top:150px;"/></center>
</div>
<center><div id="div2">
<br>
<form method="post" action="updateac.php?a=<?php echo $y;?>">
&nbsp&nbsp&nbsp&nbsp&nbsp<font color="white" size="5">CD Type</font>&nbsp&nbsp<input type="text" name="ct" value="<?php echo $f['CD_TYPE'];?>" style= "height:50px; width:500px;  border-color:black;"/>

<br>
<font color="white" size="5">Artist</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="ar" value="<?php echo $f['ARTIST'];?>" style= "height:50px; width:400px;  border-color:black;"/>
<br>

&nbsp<font color="white" size="5">Album Name</font>&nbsp&nbsp<input type="text" name="an" value="<?php echo $f['ALBUM_NAME'];?>" style= "height:50px; width:500px;  border-color:black;"/>
<br>
&nbsp<font color="white" size="5">CD Price</font>&nbsp&nbsp<input type="text" name="cp" value="<?php echo $f['CD_PRICE'];?>" style= "height:50px; width:150px; ; border-color:black;"/>
<br>
&nbsp<font color="white" size="5">Date Arrived</font><?php  
	
	  ?>
  
<br>
<br>
<center><input type="submit" value="UPDATE" style= "background-color:blue; height:20px; width:100px;" />
</form>
</center>

</body>
</html>