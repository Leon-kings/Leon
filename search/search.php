<?php 
 include_once "../connection/connection.php";

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="an e-comerce website">
  <meta http-equiv="refresh" content="434">
  <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../logo/lion.jpg" type="image/x-icon" rel="icon">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../css/cs.css">
  <title>LD</title>
</head>
<body>
  <div class="container-head bg-success ">
    <div class="col-sm-6">
    <img src="../logo/lion.jpg" alt="home description" height="100px" class="pic" width="170px">
    <br>

</div>
<br>

<div class="col-sm-6 text-right">
  
    <div class="text-right bg-success text-white text-right">
    <form action="../search/search.php" method="POST" style=" border-radius: 12px;">
    <input type="text" name="search" placeholder="shoes" style=" border-radius :12px;" size="36"> 
    <input type="submit" name="submit" value="Search" style=" border-radius :12px;">
    </form>
     
  </div>
<br>
<?php 
if (isset($_POST['submit'])) {
  $search=$_POST['search'];
  if (empty($_POST['search'])) {
    echo "<script>alert('Oops input some thing');
    location.href='../search/index.html' </script>";
  }
  else{ 
 

?>



  
</div>
<br>
<br>
</div>
<br>
<div class="container-fluid bg-info" >
<br>

    <div class="col-sm-3">
      <a href="../index1.php" title="Home"><button class="s_button"><i class="fa fa-home"></i></button></a>
    </div> 
    <div class="col-sm-3">
      <a href="../link/shop.php" title="Shop"><button class="s_button"><i class="fa fa-shopping-cart"></i> </button></a>
    </div>
 
    <div class="col-sm-3">
      <a href="../link/login.php" title="login"><button class="s_button"><i class="fa fa-user"></i></button></a>
    </div>
   
     <div class="col-sm-3">
      <a href="../link/about.php" target="_blank" title="About us"><button class="s_button"><i class='fa fa-phone'></i></button></a>
    </div>
    
  </div>


  <?php

  $select=mysqli_query($conn,"SELECT * FROM search WHERE Name LIKE'%$search%' OR Category LIKE'%$search%' " );
while ($fetch=mysqli_fetch_array($select)) {
 if (mysqli_num_rows($select)>0 ) {
$images=mysqli_fetch_assoc($select);
$NAME=$fetch['Name'];
$ID=$fetch['ID'];
$SIZE=$fetch['size'];
$COLOR=$fetch['color'];
$CAT=$fetch['Category'];
$PRI=$fetch['PRICE'];
$sel="SELECT * FROM search WHERE Name LIKE '%$search%' ORDER BY ID ";
$selectl=mysqli_query($conn,$sel);

?>


<div class="top">
  <div class="responsive-container-block bigContainer">
    <div class="responsive-container-block Container">

      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">

      <table class="table table-striped" style="border:1px solid gray; ">

<tr class="text-center bg-secondary">
               <th>ID</th>
               <th>IMAGE</th>
               <th>NAME</th>
               <th>SIZE</th>
               <th>COLOR</th>
               <th>PRICE</th>
               <th>DISCOUNT</th>
               
</tr>



<tr> 
<tr class="text-white bg-success">
<td><?php echo $CAT ?></td>
</tr>  
<td><?php echo $ID ?> </td>
<td> <a href="../img/img.php?id=<?php echo "$ID";?>"> 
    <img src="upload/<?=$images['PHOTO']?>" width="200px" height="150px" class="dimg">
    </a> </td>
<td><?php echo $NAME ?></td>
<td><?php echo $SIZE ?></td>
<td><?php echo $COLOR ?></td>
<td><?php echo $PRI ?></td>


  
</tr>


    </table>
        
    
      <?php
}
 }


    ?>
      </div>
      <?php 

  }
  }
?>
      <div class="responsive-container-block sideImgContainer">
        
        <div class="responsive-cell-block wk-desk-12 wk-ipadp-12 wk-tab-12 wk-mobile-12 side">
          
        

        <a href="../img/img.php?id=<?php echo "$ID";?>"> 
    <img src="" width="200px" height="150px" class="dimg">
    </a>


        </div>
        <div class="responsive-cell-block wk-desk-12 wk-ipadp-12 wk-tab-12 wk-mobile-12 side">
          
        <a href="../img/img.php?id=<?php echo "$ID";?>"> 
    <img src="" width="200px" height="150px" class="dimg">
    </a>




        </div>



      </div>
    </div>
  </div>
</div>


<div class="mt-5 p-4 bg-dark text-white text-center">
  <p style="color:white; background-color: black;">Leon.Inc</p>
</div>




</body>
</html>
