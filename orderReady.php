<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<style>
        @import url('https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap');
      </style>">
      
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>KFC KIOSK</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
</head>
<?php include 'partials/_dbconnect.php';?>
<body style=" background-color: bisque;">
     <div class="container" style=" background-color: bisque;" >
        <div class="navbar" style="margin-bottom:20px">
            <img src="images/logo.png" class="logo">
            <span class="readyHEAD" style="color: antiquewhite;font-size: 60px;text-align: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 600; margin-left: 60px;">These orders are ready to collect..</span> 
            
        </div>

        <div class="content" style="display: inline-block;">
        <?php
          $sql = "SELECT * FROM `orders` where `orderStatus`=1 ORDER BY `orderId` DESC"; 
          $result = mysqli_query($conn, $sql);
          
          while($row = mysqli_fetch_assoc($result)){
            
            $orderid = $row['orderId'];
        
        echo '<div class="box" style="width: 125px; height: 100px; background-color: antiquewhite;display: inline-block; margin: 10px 10px;border-radius: 10px; border-style: solid; border-color: rgb(11, 11, 11);">
          <div class="orderno" style="text-align: center;justify-content: center; font-size: 45px;font-weight: 400 ">
          #'.$orderid.'</div>
        </div>';
          }
          ?>
        

            <!--<h1>Finger Lickin Good <br></h1> -->
            



            <!--<button class="btn">Order Now</button> -->
          
            </div>
</body>
</html>