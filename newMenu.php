<?php
    include './partials/_dbconnect.php';
    include './partials/_nav.php';
    
    ?>
<STYle>
html{
    height: 100%;
}
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
    height: 100%;
}
.container{
    display: grid;
    grid-template-columns: 20% 80% ;
    min-height: 150vh;
    min-height: -webkit-fill-available;
    overflow: hidden;
}
.row{


display: flex;
flex-wrap: wrap;
margin: 30px 15px;
}
#menu{
    background: whitesmoke;
    
}
.title{
    padding: 0 30px;
}
#menu img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-top: -20px;
}
.title p{
    font-size: 40px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: indianred;
    margin: 0;
}
.border{
    width: 80px;
    height: 4px;
    margin: 3px 0;
    margin-bottom: 30px;
    border-radius: 2px;
    background: coral;
}
.menu_item{
    position : fixed;
}

.menu-item a{
    
    display: block;
    text-decoration: none;
    font-size: 20px;
    padding: 8px 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 12px 0;
    color: rgb(128, 129, 129);
    font-weight: 300;
    
}
.menu-item a:hover{
    background: rgb(250, 212, 218);
}
#food-items{
    background: whitesmoke;
    overflow: auto;
    height: 600px;;
}
#header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 10px;
    position: sticky;
    top: 0;
    background: whitesmoke;
    z-index: 1;
}
::-webkit-scrollbar{
    display: none;
}
#header .address{
    font-size: 20px;
    
}
#map{
    font-size: 25px;
    color: red;
}
.your-address{
    border: 1px solid indianred;
    color: indianred;
    padding: 5px 10px;
    border-radius: 5px;
    width: 150px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    cursor: pointer;
}
.add-box i{
    font-size: 20px;
}

#header select{
    width: 150px;
    overflow: hidden;
    border: none;
    outline: none;
    background: none;
    color: rosybrown;
    padding: 0 5px;
}
.food-items{
    display: none;
}
.cart-toggle{
    display: block;
}
.util i,.user i{
    font-size: 18px;
    margin: 0 16px;
    border: 1px solid crimson;
    padding: 8px 16px;
    color: crimson;
    border-radius: 20px;
    cursor: pointer;
}
.util i:active{
    color: white;
    background: crimson;
}
#biryani,#paneer,#chicken,#vegetable,#chinese,#south-indian{
    margin-top: 40px;   
}
#paneer #item-card,#vegetable #item-card{
    background: rgb(218, 253, 188);
}
#chinese #item-card,#south-indian #item-card{
    background: rgb(221, 243, 243);
}
#category-name,.item-menu{
    margin: 20px;
    font-size: 35px;   
    color: rgb(39, 198, 39);
    font-family: 'Aclonica', sans-serif;
}
#item-card{
    width: 180px;
    height: 220px;
    padding: 10px;
    margin: 10px;
    display: inline-block;
    border-radius: 5px;
    background: rgb(253, 221, 226);
    cursor: pointer;
    transition: 0.5s all step-end;
}
#item-card:hover img{
    transform: scale(1.2);
}
#card-top{
    display: flex;
    margin: 5px 0;
    justify-content: space-between;
}
#rating{
    padding: 7px;
    color: goldenrod;
    background: black;
    font-size: 14px;
    border-radius: 15px;
}
.fa-heart-o{
    padding: 6px;
    border-radius: 50%;
    background: white;
    cursor: pointer;
}
.toggle-heart{
background: orangered;
color: white; 
}
#item-card img{
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: auto;
    display: block;
    margin-bottom: 15px;
    transition: 0.5s all ease-in-out;
}
#item-name{
    margin: 5px 0;
    font-weight: 600;
    color: darkslategray;
    font-size: 18px;
}
#item-price{
    margin: 0;
    color: rgb(2, 27, 27);
    font-weight: 500;
    font-size: 18px;
}

.food-items{
    display: none;
}
.cart-toggle{
    display: none;
}
#cart-page{
    background: white;
    margin: 40px 10px;
    margin-right: 50px;
    padding: 20px 30px;
    padding-bottom: 30px;
    position: relative;
}
#cart-title{
    font-size: 35px;
    margin: 0;
    color: indianred;
}
#cart-page table{
    width: 100%;
    margin-top: 20px;
    text-align: center;
}
#cart-page table thead td{
    font-size: 25px;
    padding-bottom: 10px;
}

.cart-btn{
    outline: none;
    border: none;
    background: crimson;
    color: white;
    padding: 10px 25px;
    border-radius: 20px;
    font-size: 18px;
    text-transform: uppercase;
    bottom: 30px;
    margin: 15px 0;
    cursor: pointer;
}
#cart-page table tbody td{
    padding: 10px 0;
    font-size: 20px;
}
#cart-page table tbody button{
    outline: none;
    border: none;
    font-size: 16px;
    background: none;
    background: lightcoral;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    margin: 0 5px;
}
#cart-page table tbody img{
    width: 75px;
    height: 75px;
    border-radius: 50%;
}
#checkout{
    text-align: center;
    margin: 40px auto;
    border-radius: 5px;
    background: white;
    padding: 10px 20px;
}
#checkout p{
    margin: 15px 0;
    float: left;
}
#total-price,#total-item{
    font-size: 25px;
    color: indianred;
}
#delievery{
    font-size: 20px;
    color: limegreen;
}
#cart{
    background: whitesmoke;
    padding-right: 30px;
    overflow-y: scroll;
}

.item-menu{
    margin: 0;
    font-size: 30px;
    margin-top: 40px;
    color: indianred;
    background: whitesmoke;
    
}
.list-card{
    display: flex;
    align-items: center;
    margin-top: 15px;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s all ease-in-out;
}
.list-card:hover{
    background: rgb(255, 216, 222);
}
.list-card:hover img{
    transition: 0.5s all ease-in-out;
    transform: scale(1.2);
}
.list-card img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
.list-name{
    font-size: 20px;
    margin: 0 10px;
    text-decoration: none;
    text-transform: capitalize;
    color: rgb(94, 43, 43);
}
.taste-header{
    padding-top: 40px;
    padding-bottom: 10px;
    position: sticky;
    top: 0;
    background: whitesmoke;
}
#mobile-view{
    display: none;
}
#biryani{
    margin-top: 10px;
}
#m-total-amount{
    display: none;
}



</style>
</head>
<body>
<div class="container" id="container">
    <div id="menu">
        <div class="menu-item">
            <?php
        
        
        $sql = "SELECT categorieName, categorieId FROM `categories`"; 
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){

               echo  '<a class="dropdown-item" href="viewfoodList.php?catid=' .$row['categorieId']. '">' .$row['categorieName']. ' </a>';
            }
            ?>
        </div>
    </div>

    <div id="food-container">
        
        <div id="food-items" class="d-food-items">
            <div id="category" class="d-biryani">
            
            <?php
            echo '<div class="row">';
            $s = "SELECT categorieName, categorieId FROM `categories`"; 
            $re = mysqli_query($conn, $s);
            while($row = mysqli_fetch_assoc($re)){

               echo  '<p id="category-name" href="viewfoodList.php?catid=' .$row['categorieId']. '">' .$row['categorieName']. ' </p>';

            $id = $row['categorieId'];
            $sql = "SELECT * FROM `food` WHERE foodCategorieId = $id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($r = mysqli_fetch_assoc($result))
            {
                $noResult = false;
                $foodId = $r['foodId'];
                $foodName = $r['foodName'];
                $foodPrice = $r['foodPrice'];
                $foodDesc = $r['foodDesc'];
            
                echo '<div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/food-'.$foodId. '.jpg" class="card-img-top" alt="image for this food" width="249px" height="270px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($foodName, 0, 20). '...</h5>
                                <h6 style="color: #ff0000">Rs. '.$foodPrice. '/-</h6>
                                <p class="card-text">' . substr($foodDesc, 0, 29). '...</p>   
                                <div class="row justify-content-center">';
                               
                                    $quaSql = "select `itemQuantity` FROM `viewcart` WHERE foodId = '$foodId' AND `userId`= {$_SESSION['kuid']}";
                                    $quaresult = mysqli_query($conn, $quaSql);
                                    $quaExistRows = mysqli_num_rows($quaresult);
                                    if($quaExistRows == 0) {
                                        echo '<form action="partials/_manageCart.php" method="POST">
                                              <input type="hidden" name="itemId" value="'.$foodId. '">
                                              <button type="submit" name="addToCart" class="btn btn-primary mx-2">Add to Cart</button>';
                                    }else {
                                        echo '<a href="viewCart.php"><button class="btn btn-primary mx-2">Go to Cart</button></a>';
                                    }
                                
                            echo '</form>                            
                                <a href="viewfood.php?foodid=' . $foodId . '" class="mx-2"><button class="btn btn-primary">Quick View</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            if($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">Sorry In this category No items available.</p>
                        <p class="lead"> We will update Soon.</p>
                    </div>
                </div> ';
            }
            }
            ?>  
            <?php 
            echo '</div>';
            ?>
        </div>
    </div>
</div>


<script src="file:///C:/Users/mithu/Desktop/shoppingsite-main/shoppingsite-main/index.js" type="module"></script>

<?php require 'partials/_footer.php' ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script> 
        document.getElementById("title").innerHTML = "<?php echo $catname; ?>"; 
        document.getElementById("catTitle").innerHTML = "<?php echo $catname; ?>"; 
    </script> 
    </body>

