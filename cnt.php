<?php
#if(isset($_POST['Send Message'])){
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$YourMessage=$_POST["YourMessage"];
$conn=mysqli_connect("localhost:3306","root","admin2k","cnt");
$sql="insert into cnt values('".$Name."','".$Email."','".$YourMessage."')";
echo $sql;
if(mysqli_query($conn, $sql)){ 
echo "Record inserted successfully"; 
}else{ 
echo "Could not insert record: ". mysqli_error($conn); 
} 
mysqli_close($conn);
#}
?>