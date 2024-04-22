<?php

include '../config.php';

$id = $_GET['id'];
 $type_of_meal = 0;
 $ttot =  0;
$mepr = 0;
$btot = 0;
$sql ="Select * from roombook where id = '$id'";
$re = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($re))
{
	$Name = $row['Name'];
    $Email = $row['Email'];
    $Phone = $row['Phone'];
    $RoomType = $row['RoomType'];
    $Bed = $row['Bed'];
    $Meal = $row['Meal'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
}


if($stat == "NotConfirm")
{
    $st = "Confirm";

    $sql = "UPDATE roombook SET stat = '$st' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    

        $psql = "INSERT INTO payment(id,Name,Email,RoomType,cin,cout,noofdays,meal,mealtotal,finaltotal) VALUES ('$id', '$Name', '$Email', '$RoomType', '$cin', '$cout', '$noofday','$Meal', '$mepr', '$fintot')";

        mysqli_query($conn,$psql);

        header("Location:roombook.php");
}



?>