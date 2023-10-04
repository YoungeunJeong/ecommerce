<?php include('header.php');?>
    
    <div class="bg">
        <div class="video-wrap">
            <video src="video/productionID_5128908.mp4" muted autoplay loop>
            </video>
        </div>
        <div class="video-content">
            <div class="text">
                <a href="about.php" class="aboutbutton">About us</a>
            </div>
        </div>
        </div>
    <div class="best">
        <div class="text-wrap">
            <h1>BEST SELLER</h1>
            <h3>HATSHEPSUT's Best seller& Review</h3>
        </div>
    <div class="wrap-container">
        <div class="container-img">
<?php
        $query = "SELECT * FROM review ORDER BY rating DESC limit 4";
        $sql = mysqli_query($connection,$query);
        
        while($row = mysqli_fetch_array($sql)){
            
        $name = $row['name'];
        $ratings = $row['rating'];
        $comment = $row['comment'];
        $product_id =$row['product_id'];

        
        $q ="SELECT tn_image FROM products WHERE product_id='$product_id'";
        $s = mysqli_query($connection,$q);
        $r = mysqli_fetch_array($s);
        $tn_image =$r['tn_image'];
        echo "
        <div class=\"card\">
            <div class=\"card-img\">
                <a href=\"detail.php?page=$product_id\"><img src=\"img/Image_Thumbnail/$tn_image\" alt=\"eye cream\"></a>
            </div>
            
            <div class=\"texts\">
                    <p>$comment</p>
                <div class=\"rv-line\"></div>
                    <div class=\"rv-bottom\">
                        <div class=\"customer_name\"><b>$name</b></div>
                        <div class=\"stars\">
                            <span>";
                            if ($ratings == 1){
                                echo"★";
                            }elseif($ratings == 2){
                                echo"★★";
                            }elseif($ratings == 3){
                                echo"★★★";
                            }elseif($ratings == 4){
                                echo"★★★★";
                            }elseif($ratings == 5){
                                echo"★★★★★";
                            };
                            echo"
                            </span>
                        </div>
                    </div>
                </div>
            </div>";
        };
?>       
    </div>
    </div>
        <div class="button">
            <a href="products.php" class="viewbutton" >View All Products</a>
        </div>
    </div>    
    
 <?php include('footer.php');?>
</body>
   
</html>
