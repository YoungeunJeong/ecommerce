<?php include('header.php');?>
<?php
         $product_id = $_GET['page'];
         $query = "SELECT product_name, fs_image, product_price, product_desc, main_category, sub_category FROM products WHERE product_id='$product_id' ";
         $sql = mysqli_query($connection,$query);
         $row = mysqli_fetch_array($sql);

         $product_name = $row['product_name'];
         $product_price = $row['product_price'];
         $product_desc = $row['product_desc'];
         $fs_image = $row['fs_image'];
         $main_category = $row['main_category'];
         $sub_category = $row['sub_category'];
         ?>
<main>
    <div class="topbutton">
    <button id="go-back"><ion-icon name="chevron-back-outline"></ion-icon>
    </button>
    <a href="main_category.php?page=<?php echo $main_category;?>"><?php echo $main_category;?>
    </a><span class="dspan"> > </span>
    <a href="sub_category.php?page=<?php echo $sub_category;?>"><?php echo $sub_category;?></a>
</div>
    <article>
    
        <?php
         
         echo "
         <div class=\"detail-wrap\">
         <div class=\"detailimg\">
            <img src=\"img/Image_FullSize/$fs_image\" alt=\"$product_name\" width=\"800\" height=\"800\">
            </div>
            <div class=\"detaildesc\">
            <h4>$product_name</h4>
            
            <p class=\"price\">$$product_price</p>
            <form action=\"cart_post.php\" method=\"post\">
            <input type=\"hidden\" name=\"product_id\" value=\"$product_id\">
            <label for=\"quantity\">Quantity:</label>
                <select id=\"quantity\" name=\"qtt\">
                    <option>1</option>
                </select><br>
                
            <input type=\"submit\" id=\"cartbutton\" value=\"Add to Cart\">
            </form>           
            <h5>Product Description</h5>
            <hr>
            $product_desc
            </div>
        </div>"
        ;
        ?>
        
        <div class="icon-wrap">

            <div> 
            <svg xmlns="http://www.w3.org/2000/svg" width="380" height="380" viewBox="0 0 380 380">
            <g id="Ellipse_1" data-name="Ellipse 1" fill="#fff" stroke="#000" stroke-width="1">
                <circle cx="190" cy="190" r="190" stroke="none"/>
                <circle cx="190" cy="190" r="189.5" fill="none"/>
            </g>
            <path id="Icon_awesome-hand-holding-heart" data-name="Icon awesome-hand-holding-heart" d="M91.762,93.94a5.38,5.38,0,0,0,8.5,0l36.3-42.823c10.533-12.449,9.933-33.074-1.867-44.548C124.426-3.443,109.127-1.643,99.728,9.456l-3.733,4.387-3.7-4.35C82.9-1.643,67.6-3.443,57.33,6.569c-11.766,11.475-12.4,32.1-1.867,44.548Zm96.661,29.1c-3.933-4.012-10.066-3.75-14.2,0l-30.8,27.711A19.8,19.8,0,0,1,130.093,156H90.662c-2.933,0-5.333-2.7-5.333-6s2.4-6,5.333-6h26.1a11.479,11.479,0,0,0,11.1-9.975c1.1-7.5-4.033-14.024-10.533-14.024H64a36.632,36.632,0,0,0-24.7,9.862L23.8,144H5.333C2.4,144,0,146.7,0,150v36c0,3.3,2.4,6,5.333,6H124.26a19.921,19.921,0,0,0,13.333-5.25l50.4-45.373A12.986,12.986,0,0,0,188.423,123.039Z" transform="translate(94 94.001)" fill="#ffb2db"/>
            </svg>
            <p>Cruelty-Free</p>
            </div>
            <div> 
            <svg xmlns="http://www.w3.org/2000/svg" width="380" height="380" viewBox="0 0 380 380">
            <g id="Ellipse_2" data-name="Ellipse 2" fill="#fff" stroke="#000" stroke-width="1">
                <circle cx="190" cy="190" r="190" stroke="none"/>
                <circle cx="190" cy="190" r="189.5" fill="none"/>
            </g>
            <path id="Icon_awesome-leaf" data-name="Icon awesome-leaf" d="M182.07,3.644c-1.867-4.687-7.2-4.874-9.434-.45C162.3,23.4,143.8,36,122.664,36H95.995c-35.337,0-64.006,32.246-64.006,71.99,0,2.625.267,5.137.5,7.686C53.757,98.544,84.46,84,128,84c2.934,0,5.334,2.7,5.334,6s-2.4,6-5.334,6C44.19,95.994,8.653,153.774.786,175.484c-2.2,6.112.4,13.086,5.834,15.6,5.467,2.55,11.668-.412,13.935-6.487.5-1.35,6.967-17.96,23.969-33.97,10.8,16.46,31.336,32.171,58.306,28.946C155.167,175.3,192,122.5,192,57.862c0-18.822-3.6-38.32-9.934-54.218Z" transform="translate(93.996 94.002)" fill="#156121"/>
            </svg>
            <p>Natural Ingredients</p>
            </div>      
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="380" height="380" viewBox="0 0 380 380">
            <g id="Ellipse_3" data-name="Ellipse 3" fill="#fff" stroke="#000" stroke-width="1">
                <circle cx="190" cy="190" r="190" stroke="none"/>
                <circle cx="190" cy="190" r="189.5" fill="none"/>
            </g>
            
            <path id="Icon_metro-warning" data-name="Icon metro-warning" d="M98.571,19.323l80.457,160.355H18.114L98.571,19.323Zm0-17.4c-4.138,0-8.276,2.79-11.416,8.372L5.2,173.633c-6.279,11.162-.938,20.295,11.87,20.295h163c12.806,0,18.148-9.133,11.869-20.295h0L109.986,10.3c-3.139-5.581-7.277-8.372-11.415-8.372Zm12,156a12,12,0,1,1-12-12A12,12,0,0,1,110.571,157.928Zm-12-24a12,12,0,0,1-12-12v-36a12,12,0,0,1,24,0v36A12,12,0,0,1,98.571,133.928Z" transform="translate(91.429 92.072)" fill="#ccc16e"/>
            </svg>
            <p>Irritation Free</p>
            </div>
    </div>
    <div class="rv">
    <h4>Reviews</h4>
    
    <form action="review_post.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo"$product_id"?>">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="comment" placeholder="Comment here" size="30" required>
    <select name="ratings" required>
        <option value="">- - overall rating - -</option>
        <option value="1">★</option>
        <option value="2">★★</option>
        <option value="3">★★★</option>
        <option value="4">★★★★</option>
        <option value="5">★★★★★</option>
    </select>

    <input id="rv-btn" type="submit" value="Submit">
    </form>
    <div class="rvline"></div>
<?php 

$query = "SELECT id, name, comment, rating FROM review WHERE product_id='$product_id' ";
$sql = mysqli_query($connection,$query);

while($r = mysqli_fetch_array($sql)){
    $name = $r['name'];
    $comment = $r['comment'];
    $ratings = $r['rating'];
    echo "
    <div class=\"rv-wrap\">
        <ul class=\"rv-ul\">
            <li class=\"rv-name\">$name</li>
            <li>|</li>
            <li class=\"rv-cmt\">$comment</li>
            <li>|</li>
            <li>";
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
            echo"</li>
        </ul>
    <div class=\"rv1\"></div>
    </div>  
    ";
};
?>
    <div class="rvline"></div>
   
    
    </div>
    </article>
    <div class="button">
                <a href="products.php">Back to Shop</a>
            </div>
    </main>

<?php include('footer.php')?>
<script>
    document.getElementById('go-back').addEventListener('click', () => {
    window.history.back();
});

</script>
</body>
</html>