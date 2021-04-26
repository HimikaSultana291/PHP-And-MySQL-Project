<?php
 
$con=mysqli_connect('localhost','root','','p11');

$sql="select * FROM student";
$res=mysqli_query($con,$sql);
?>
<html>
<body>
<table border="1">
<tr>
	<td>Student</td>
	<td>Name</td>
	<td>Age</td>
	<td>Gender</td>
	<td>Country</td>
	<td>Action</td>
</tr>
<?php 
while($row=mysqli_fetch_assoc($res))
{
?>
<tr>
	<td> <?php echo $row["id"]; ?> </td>
	<td> <?php echo $row["name"]; ?> </td>
	<td> <?php echo $row["age"];?> </td>
	<td> <?php echo $row["gender"];?> </td>
	<td> <?php echo $row["country"];?> </td>
	<td><a href="deletesave.php?id=<?php echo $row["id"]?>">DELETE</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>