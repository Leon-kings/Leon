<?php 
  include('../../connection/connection.php');
  $id=$_GET['id'];
  session_start(); 
   
         ?>
         <?php 
   
   $select=mysqli_query($conn,"SELECT * FROM product WHERE ID='$id'");
     $sel="SELECT * FROM product WHERE ID='$id' ";
       $select1=mysqli_query($conn,$sel);
   while($images=mysqli_fetch_assoc($select1)) {
   $fetch=mysqli_fetch_array($select);
     if (mysqli_num_rows($select)>0 ) {
       $NAME=$fetch['Name'];
       $ID=$fetch['ID'];
       $SIZE=$fetch['Size'];
       $COLOR=$fetch['Color'];
       $CAT=$fetch['Category'];
       $PRI=$fetch['PRICE'];
      $sql=mysqli_query($conn,"DELETE from product WHERE ID='$id'");
      if($sql){
        echo"<script>alert('well deleted');location.href='../../dashboard/dashboard.php' </script>";

      }
     else{
        echo "Opps not deleted !!";
     }
        
    }}
         ?>
                   