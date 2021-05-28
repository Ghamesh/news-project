<?php

include "config.php";
$userid = $_GET['id'];

$sql = "delete from user where user_id ={$userid}";
if(mysqli_query($conn,$sql)){
    header("location: {$hostname}/admin/users.php");
}else{
    echo "<p style='color:red; marig:10px 0px;'>Can't delete user record.</p>";
}
mysqli_close($conn);

?>