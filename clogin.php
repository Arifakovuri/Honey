<?php 
if(isset($_POST['Login'])) 
{
$Email=$_POST["Email"];
$Password=$_POST["Password"];
$conn = mysqli_connect("localhost:3306","root","admin2k","lg");
if(! $conn ) 
{ 
 die('Could not connect: ' . mysqli_error()); 
} 
$sq="select * from lg where Email='".$Email. "' and Password='".$Password. "'";
$result=mysqli_query($conn, $sq); 
if($row = mysqli_fetch_assoc($result)){
 
 // echo "Login Sucessful...... ";
 header("Location: cust-index.html"); 
}
else
{
 echo "<center><h2>"."Login failure"."</h2></center>";
 }
mysqli_close($conn); 
}
?>