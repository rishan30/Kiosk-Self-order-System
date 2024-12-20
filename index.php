<?php
include "./partials/_dbconnect.php";
session_start();
?>

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
<body>
<?php	
if(isset($_POST["btn"]))
      {
         $i=1;
         $sql="select * from k_user;";
         $res=$conn->query($sql);
         
         if($res->num_rows>0)
         {
          while($ro = $res->fetch_assoc())
         {
         $i++;
         }
         }
         
         $_SESSION["kuid"]=$i;
         $s="insert into k_user(ID) values ($i);";
         if($conn->query($s))
         
         {
         echo "
            <script> 
            window.open('home.php','_self');
            </script>
            ";
         }
         
      }
   ?>
   <body>
     <div class="container">
        <div class="navbar">
            <img src="images/logo.png" class="logo">
             <span class="waviy1">KFC KIOSK</span>
        </div>

        <div class="content">

          <div class="waviy">
            <span style="--i:0">'</span>
            <span style="--i:1">F</span>
            <span style="--i:2">i</span>
            <span style="--i:3">n</span>
            <span style="--i:4">g</span>
            <span style="--i:5">e</span>
            <span style="--i:6">r</span> 
            <span style="--i:7"> </span>
            <span style="--i:8">L</span>
            <span style="--i:9">i</span>
            <span style="--i:10">c</span>
            <span style="--i:11">k</span>
            <span style="--i:12">i</span>
            <span style="--i:13">n</span>
            <span style="--i:14"> </span>
            <span style="--i:15">G</span>
            <span style="--i:16">o</span>
            <span style="--i:17">o</span>
            <span style="--i:18">d</span>
            <span style="--i:19">'</span>

         
           </div>

            <!--<h1>Finger Lickin Good <br></h1> -->
            

        <div class="wrap">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
               <button class="button" name="btn">order Here</button>
               </form>
        </div>


            <!--<button class="btn">Order Now</button> -->
          
            </div>
            <img src="images/food.png" class="image">
        </div>
     </div>
</body>
</html>


 

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});


</script>


</body>
</html>