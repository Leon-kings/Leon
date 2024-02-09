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
       $photo=$fetch['PHOTO'];
       ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../../upload-file/upload1.php" method="POST" enctype="multipart/form-data" style="margin: 150px;">

  <br>
<input type="text" name="name" value="<?php echo "$NAME";?>" required>
<input type="text" name="cat" value="<?php echo "$CAT";?>" >
<br>
<input type="text" name="size" value="<?php echo " $SIZE";?>" required>
<input type="text" name="color" value="<?php echo " $COLOR";?>"required>
<br>
<input type="text" name="price" value="<?php echo "$PRI";?>">

<input type="file" name="PHOTO" value="<?php echo " $photo";?>" required>
<br>

<br>
<input type="submit" name="submit" value="UPLOAD" style="background-color: lightgreen; color: black;">
<input type="reset" name="reset" style="background-color:lightgoldenrodyellow;">


  </form>
</body>
</html>


<?php

}
}

?>