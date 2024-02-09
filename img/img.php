<?php 
include('../connection/connection.php');
$id=$_GET['id'];

$select=mysqli_query($conn,"SELECT * FROM product WHERE ID='".$id."' ");
$fetch=mysqli_fetch_assoc($select);
$NAME=$fetch['Name'];
$ID=$fetch['ID'];
$SIZE=$fetch['Size'];
$COLOR=$fetch['Color'];
$CAT=$fetch['Category'];
$PRI=$fetch['PRICE'];

$sel="SELECT * FROM product WHERE ID='".$id."' ";
$select1=mysqli_query($conn,$sel);
$images=mysqli_fetch_assoc($select1);
?>

    
    
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

<link rel="stylesheet" href="../assets/css/templatemo-hexashop.css">

<link rel="stylesheet" href="../assets/css/owl-carousel.css">

<link rel="stylesheet" href="../assets/css/lightbox.css">
      <title>Document</title>
</head>
<body>
      

<center>

	<div class="top">
 

      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
<img src="../upload/<?=$images['PHOTO']?>" id="Img">
       
      </div>
     
        <p><span style="font-family: sans-serif;">NAMES:</span><b> <?php echo "$NAME"; ?></b> </p>
        <p><span style="font-family: sans-serif;">SIZE:</span><b><?php echo "$SIZE"; ?></b>  </p>
        <p>PRICE: <span>$<b> <?php echo "$PRI"; ?></b>.00</span></p>
        <p><span style="font-family: sans-serif;">COLOR:</span><b> <?php echo "$COLOR"; ?></b></p> 
      
         </div>

         </center>
      
         </body>
</html>

