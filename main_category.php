<?php include('header.php')?>
<div class="topsort">
<div id="itemSort">
            <form action="#">
                <label for="sortOption">Sort Products by:</label>
                <select id="sortOption">
                    <option value="all">- - choose one - -</option>
                    <option value="lprice">Price: Low - High</option>
                    <option value="hprice">Price: High - Low</option>
                    <option value="aname">Product Name: A - Z</option>
                    <option value="zname">Product Name: Z - A</option>
                </select>
            </form>
    </div>
    <div class="categorywrap">
        <label for="categoryOption">Product Category: </label>
        <select id="categoryOption" onchange="moveurl(this.value);">
        <option value="none">- - choose one - -</option>
            <option value="products.php">View all products</option>
            <optgroup label="Main category">
                <option value="main_category.php?page=Skin%20Care">Skin Care</option>
                <option value="main_category.php?page=Body%20and%20Hand">Body & Hand</option>
                <option value="main_category.php?page=Lip%20Care">Lip Care</option>
                <option value="main_category.php?page=Hair">Hair</option>
            </optgroup>
            <optgroup label="Sub category">
                <option value="sub_category.php?page=All%20Skin%20Type">All Skin Type</option>
                <option value="sub_category.php?page=Dry%20Skin%20Type">Dry Skin Type</option>
                <option value="sub_category.php?page=All%20Scalp%20Type">All Scalp Type</option>
                <option value="sub_category.php?page=Dry%20Scalp%20Type">Dry Scalp Type</option>
            </optgroup>


        </select>
    </div>
</div>
    <div id="itemlist">
<?php   
        $main_category = $_GET['page'];
         $query = "SELECT product_id, product_name, product_price,main_category, sub_category, tn_image from products WHERE main_category='$main_category'";
         $sql = mysqli_query($connection,$query);
            
         while($row = mysqli_fetch_array($sql)){
             
             $product_name = $row['product_name'];
             $product_price = $row['product_price'];
             $sub_category = $row['sub_category'];
             $main_category = $row['main_category'];
             $tn_image = $row['tn_image'];
             $product_id = $row['product_id'];
             echo "
             
             <div class=\"product-wrap\" data-name=\"$product_name\" data-price=\"$product_price\">
                 <a href=\"detail.php?page=$product_id\">
                     <div class=\"product-img\">
                         <img src=\"img/Image_Thumbnail/$tn_image\" alt=\"product #$product_id\" width=\"350\" heigth=\"350\">
                     </div>
                     <div class=\"product-text\">
                     <h3>$product_name</h3>
                         <div class=\"product-text-1\">
                             <p>$sub_category</p>
                             <p>$ $product_price</p>
                         </div>
                         <div class=\"product-text-2\">
                             <p>Cruelty-Free</p>
                             <p>Natural Ingredients</p>
                             <p>Irritation Free</p>
                         </div>
                     
                         <div class=\"product-link\">
                             <p>View Detail <ion-icon name=\"arrow-forward-outline\" size=\"small\"></ion-icon></p>
                         </div>
                     </div>
                 </a>
             </div>";
         } 
     ?>
</div>




<?php include('footer.php')?>
<script>
    
function sortProducts(userChoice){
    
    var productsArray = Array.prototype.slice.call(itemlist.querySelectorAll(".product-wrap",0));
        
    if(userChoice == "lprice"){
        productsArray.sort((a,b) => a.dataset.price - b.dataset.price); 
        console.log(productsArray);
    }
    if(userChoice == "hprice"){
        productsArray.sort((a,b) => b.dataset.price - a.dataset.price); 
        console.log(productsArray);
    }
    if(userChoice == "aname"){
        productsArray.sort((a,b) => a.dataset.name.localeCompare(b.dataset.name)); 
        
    }
    if(userChoice == "zname"){
        productsArray.sort((a,b) => b.dataset.name.localeCompare(a.dataset.name)); 
        
    }

    productsArray.forEach((product) => {
        itemlist.appendChild(product);
    })
}
itemSort.addEventListener("change", function(){

    sortProducts(sortOption.value);
})

function moveurl(url) { 
    location.href = url;

}

</script>
</body>
</html>