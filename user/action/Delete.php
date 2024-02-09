<?php
include('connection.php');
$id=$_GET['id'];
echo $id;
$select=mysqli_query($conn,"SELECT * FROM search WHERE ID='".$id."' ");
$fetch=mysqli_fetch_assoc($select);
$delete=mysqli_query($conn,"DELETE FROM search WHERE ID='"$id"'");
if ($delete) {
echo "<script>alert('Well deleted !!');location.href='loggeduder.php' </script>";
}
?>