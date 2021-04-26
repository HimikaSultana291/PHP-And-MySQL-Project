<?php
$con= mysqli_connect('localhost','root','','p11');
$sql= "select * FROM student";
$res=mysqli_query($con,$sql);
?>

<html>
<body>
<h2>Display Database Info</h2>
<br><br>
<table border="1">
<tr>
    <th>StudentID</th>
	<th>Name</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Country</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($res))
{
?>
<tr>


   <td><?php echo $row["id"]; ?></td>
   <td><?php echo $row["name"];?></td>
   <td><?php echo $row["age"];?></td>
   <td> <?php echo $row["gender"] ?> </td>
   <td> <?php echo $row["country"] ?> </td>
	
</tr>	
	
<?php
        
}

?>

</table>
</body>
</html>