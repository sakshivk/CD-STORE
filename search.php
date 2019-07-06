



<html>
<head>
<style type="text/css">
#div0
{
width:100%;
height:100%;
background-image:url('images-3.jpeg');
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
background-image:url('images-6.jpeg');
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
<br>
<br>
<form method="post" action="search.php">
&nbsp&nbsp&nbsp&nbsp&nbsp<select name="see" style= "background-color:white; height:50px; width:200px;  border-color:black;">
<option value="CD_TYPE">CD_TYPE</option>
<option value="ARTIST">ARTIST</option>
<option value="ALBUM_NAME">ALBUM_NAME</option>
<option value="CD_PRICE">CD_PRICE</option>
<option value="DATE">DATE</option>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="tx" placeholder="Beatles" style= "background-color:white; height:50px; width:200px;  border-color:black; margin-left:100px;"/>
<br><br><br><br><br>
<center><input type="submit" name="sub" value="Search" style= "background-color:blue; height:20px; width:100px;" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="cd.php"><input type="button" value="Admin Home" style= "background-color:blue; height:20px; width:100px;" /></a></center>
</center>
</form>

<?php
error_reporting(0);
ob_start();
if(isset($_POST['sub']))
{
mysql_connect("localhost","root","");
mysql_select_db("cd");

$da=$_POST['see'];
$dad=$_POST['tx'];
$ss="select * from table100 where $da='$dad'";
$sss=mysql_query($ss);

?>

<center><table border="4" color="black">
<tr>
<th>id</th><th>cd_type</th><th>artist</th><th>album name</th><th>cd_price</th><th>date</th></th>
</tr>
<?php
while($fetch=mysql_fetch_array($sss))
{
?>
<tr>
<td><?php echo$fetch['id']; ?></td>
<td><?php echo$fetch['CD_TYPE']; ?></td>
<td><?php echo$fetch['ARTIST']; ?></td>
<td><?php echo$fetch['ALBUM_NAME']; ?></td>
<td><?php echo$fetch['CD_PRICE']; ?></td>
<td><?php echo$fetch['DATE']; ?></td>
<td><a href="update22.php?aa=<?php echo$fetch['id']; ?>">Update</a></td>



</tr>
<?php
}
?>
</center>
</table>
<?php
}
?>
</div>
</div>
</body>
</html>

