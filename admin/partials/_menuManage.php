<?php
    include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['createItem'])) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $categoryId = $_POST["categoryId"];
        $price = $_POST["price"];
        $option1 =$_POST["opt1"];
        $option2 =$_POST["opt2"];

        $sql = "INSERT INTO `food` (`foodName`, `foodPrice`, `foodDesc`,`custom1`,`custom2`, `foodCategorieId`) VALUES ('$name', '$price', '$description','$option1' ,'$option2', '$categoryId')";   
        $result = mysqli_query($conn, $sql);
        $foodId = $conn->insert_id;
        if ($result){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                
                $newName = 'food-'.$foodId;
                $newfilename=$newName .".jpg";

                $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/kfc-kiosk/img/';
                $uploadfile = $uploaddir . $newfilename;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    echo "<script>alert('success');
                            window.location=document.referrer;
                        </script>";
                } else {
                    echo "<script>alert('failed');
                            window.location=document.referrer;
                        </script>";
                }

            }
            else{
                echo '<script>alert("Please select an image file to upload.");
                        window.location=document.referrer;
                    </script>';
            }
        }
        else {
            echo "<script>alert('failed');
                    window.location=document.referrer;
                </script>";
        }
    }
    if(isset($_POST['removeItem'])) {
        $foodId = $_POST["foodId"];
        $sql = "DELETE FROM `food` WHERE `foodId`='$foodId'";   
        $result = mysqli_query($conn, $sql);
        $filename = $_SERVER['DOCUMENT_ROOT']."/kfc-kiosk/img/food-".$foodId.".jpg";
        if ($result){
            if (file_exists($filename)) {
                unlink($filename);
            }
            echo "<script>alert('Removed');
                window.location=document.referrer;
            </script>";
        }
        else {
            echo "<script>alert('failed');
            window.location=document.referrer;
            </script>";
        }
    }
    if(isset($_POST['updateItem'])) {
        $foodId = $_POST["foodId"];
        $foodName = $_POST["name"];
        $foodDesc = $_POST["desc"];
        $foodPrice = $_POST["price"];
        $foodCategorieId = $_POST["catId"];
        $option1 =$_POST["opt1"];
        $option2 =$_POST["opt2"];

        $sql = "UPDATE `food` SET `foodName`='$foodName', `foodPrice`='$foodPrice', `foodDesc`='$foodDesc',`custom1` ='$option1',`custom2` ='$option2', `foodCategorieId`='$foodCategorieId'  WHERE `foodId`='$foodId'";   
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "<script>alert('update');
                window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                window.location=document.referrer;
                </script>";
        }
    }
    if(isset($_POST['updateItemPhoto'])) {
        $foodId = $_POST["foodId"];
        $check = getimagesize($_FILES["itemimage"]["tmp_name"]);
        if($check !== false) {
            $newName = 'food-'.$foodId;
            $newfilename=$newName .".jpg";

            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/kfc-kiosk/img/';
            $uploadfile = $uploaddir . $newfilename;

            if (move_uploaded_file($_FILES['itemimage']['tmp_name'], $uploadfile)) {
                echo "<script>alert('success');
                        window.location=document.referrer;
                    </script>";
            } else {
                echo "<script>alert('failed');
                        window.location=document.referrer;
                    </script>";
            }
        }
        else{
            echo '<script>alert("Please select an image file to upload.");
            window.location=document.referrer;
                </script>';
        }
    }
}
?>