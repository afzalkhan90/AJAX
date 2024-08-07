<?php

include("db.php");
$id = $_POST['id'];
$query = "select * from users where id='".$id."'";
$res = mysqli_query($con, $query);
while($row=mysqli_fetch_assoc($res))
{
    $arr = $row;
    echo json_encode($arr);
}

?>