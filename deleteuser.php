<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","mega");

$query = "delete from users where id=$id";
$delete = mysqli_query($conn,$query);

if($delete){
    header("Location:viewusers.php");
}

?>