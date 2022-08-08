<?php
#if(isset($_POST['Submit'])){
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $MobileNumber=$_POST["MobileNumber"];
    $Gender=$_POST["Gender"];
    $Address=$_POST["textarea"];
    $District=$_POST["District"];
    $State=$_POST["State"];
    $Pincode=$_POST["Pincode"];
    $EnterPassword=$_POST["EnterPassword"];
    $conn=mysqli_connect("localhost:3306","root","admin2k","rl");
    $sql="insert into rl values('".$Name."','".$Email."','".$MobileNumber."','".$Gender."','".$Address."','".$District."','".$State."','".$Pincode."','".$EnterPassword."')";
    echo $sql;
    if(mysqli_query($conn,$sql)){
        echo "Record inserted successfully";
    }else{
        echo "could not insert record:".mysqli_error($conn);
    }
    mysqli_close($conn);
#}
?>