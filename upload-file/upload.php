<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload1.php" method="POST" enctype="multipart/form-data" style="margin: 150px;">

  <br>
<input type="text" name="name" placeholder="Name of products" required>
<input type="text" name="cat" placeholder="Men/Women ">
<br>
<input type="text" name="size" placeholder="40-42/Medium" required>
<input type="text" name="color" placeholder="blue" required>
<br>
<input type="text" name="price" placeholder="24$">

<input type="file" name="PHOTO" required>
<br>

<br>
<input type="submit" name="submit" value="UPLOAD" style="background-color: lightgreen; color: black;">
<input type="reset" name="reset" style="background-color:lightgoldenrodyellow;">


  </form>
</body>
</html>