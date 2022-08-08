<?php
#if(isset($_POST['Submit'])){
$OrderId=$_POST["OrderId"];
$OrderDate=$_POST["OrderDate"];
$PhoneNumber=$_POST["PhoneNumber"];
$Address=$_POST["textarea"];
$Item1=$_POST["Item1"];
$Quantity=$_POST["Quantity"];
$Item2=$_POST["Item2"];
$Quantity=$_POST["Quantity"];
$Item3=$_POST["Item3"];
$Quantity=$_POST["Quantity"];
$Item4=$_POST["Item4"];
$Quantity=$_POST["Quantity"];
$conn=mysqli_connect("localhost:3306","root","admin2k","items");
$sql="insert into items values(".$OrderId.",'".$OrderDate."','".$PhoneNumber."','".$Address."','".$Item1."',".$Quantity.",'".$Item2."',".$Quantity.",'".$Item3."',".$Quantity.",'".$Item4."',".$Quantity.")";
echo $sql;
if(mysqli_query($conn, $sql)){ 
echo "Record inserted successfully"; 
}else{ 
echo "Could not insert record: ". mysqli_error($conn); 
} 
mysqli_close($conn);
#}
?>