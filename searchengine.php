<html>
<style type="text/css">
<!--
.style1 {
font-size: x-large;
font-weight: bold;
color: #0000FF;
}
-->
input {border:0;outline:0;}
</style>
<center>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div align="center"><span class="style1">View Result </span></div>
<table width="396" border="1" align="center" style="border-collapse:collapse;bordercolor:#FF3333">
 <tr>
 <td>Item Id</td>
 <td><input name="odrid" type="text" placeholder="Enter Item Id "></td>
 </tr>
 <td colspan="2"><div align="center">
 <label>
 <input type="submit" name="Submit" value="Submit">
 </label>
 </div> <div align="center"></div></td>
 </tr>
</table>
<h2 style ="color:red;">&nbsp;</h2>
</form>
</html>
<?php
if(isset($_POST['Submit'])) 
{
$conn = mysqli_connect("localhost:3306","root","admin2k","items");
if(! $conn ) 
{ 
 die('Could not connect: ' . mysqli_error()); 
} 
$ItemId=$_POST['odrid'];
$sql="Select * from items where odrid=".$ItemId;
$resultset=mysqli_query($conn, $sql); 
 
if(mysqli_num_rows($resultset)){ 
echo "<table border='1' width='50%'>";
while($row = mysqli_fetch_assoc($resultset)){ 
echo "<tr>";
 echo "<td>"."Order Date :". "</td>". "<td>". $row['orderdate'] . "</td>"; 
echo "</tr>";
echo "<tr>";
 echo "<td>"."Phone Number :". "</td>". "<td>". $row['pnbr'] . "</td>"; 
echo "</tr>";
 
echo "<tr>";
 echo "<td>"."Address :". "</td>". "<td>". $row['address'] . "</td>"; 
echo "</tr>";
 
 echo "<tr>";
 echo "<td>"."Item1  :". "</td>". "<td>". $row['item1'] . "</td>"; 
echo "</tr>";
 echo "<tr>";
 echo "<td>"."tem1q :". "</td>". "<td>". $row['item1q'] . "</td>"; 
echo "</tr>";
 echo "<tr>";
 echo "<td>"."Item2  :". "</td>". "<td>". $row['item2'] . "</td>"; 
echo "</tr>";
 echo "<tr>";
 echo "<td>"."Item2q :". "</td>". "<td>". $row['item2q'] . "</td>"; 
echo "</tr>";
 echo "<tr>";
 echo "<td>"."Item3 :". "</td>". "<td>". $row['item3'] . "</td>"; 
echo "</tr>";
echo "<tr>";
echo "<td>"."Item3q :". "</td>". "<td>". $row['item3q'] . "</td>"; 
echo "</tr>";
echo "<tr>";
echo "<td>"."Item4 :". "</td>". "<td>". $row['item4'] . "</td>"; 
echo "</tr>";
echo "<tr>";
echo "<td>"."Item4q :". "</td>". "<td>". $row['item4q'] . "</td>"; 
echo "</tr>";

}
echo "</table>"; 
}
mysqli_close($conn); 
}
?> 
