<?php session_start();
      $session_id = session_id();
?>
<?php include('header.php');?>

<main>
<div class="cartbutton">
    <button id="go-back">
        <ion-icon name="chevron-back-outline"></ion-icon>
    </button>
    <span class="scart">Shopping cart</span>
</div>
     <article class="cart-article">
 
<?php 
    $query = "SELECT id, product_img, product_price, product_name, product_id FROM temp_cart WHERE session_id='$session_id' ";
    $sql = mysqli_query($connection,$query);
    
    $total=0;
    $shipping=10;
        while($row = mysqli_fetch_array($sql)){
           
            $product_img = $row['product_img'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $product_id = $row['product_id'];
            $id = $row['id'];
            $total += $product_price; 

            
                echo 
                "<div class=\"cartmain\">
                <div class=\"cartimg\">
                <a href=\"detail.php?page=$product_id\">
                <img src=\"img/Image_Thumbnail/$product_img\" alt=\"$product_name\" width=\"350\" height=\"350\">
                </a></div>
                <div class=\"cartinfo\">
                <h4>$product_name</h4>
                <ul>
                    <li>Quantity</li>
                    <li><select id=\"quantity\" name=\"qtt\">
                    <option>1</option>
                    </select><br></li>
                </ul>
                <ul>
                    <li>Price</li>
                    <li>$ $product_price</li>
                </ul>
                <a href=\"cart_del.php?id=$id\">
                <span>Remove</span></a></div></div>";
    
                
        }
        if($total==0){
            echo "
            <h4>Your cart is empty, click the below button to shop our best skin care products.</h4>
            <div class=\"button\">
                <a href=\"products.php\">Shop ></a>
            </div>
            
            ";
        }else{
            $taxes=$total*0.05;
            $subtotal=$total+$shipping+$taxes;
            $total=number_format($total,2);
            $taxes=number_format($taxes,2);
            $shipping=number_format($shipping,2);
            $subtotal=number_format($subtotal,2);
            echo 
            "   <div class=\"totalline\"></div>  
            <div class=\"subtotal\">
                <p>Total: $$total</p>
                <p>Taxes: $$taxes</p>
                <p>Shipping: $$shipping</p>
                <p class=\"total\">SubTotal: $$subtotal CAD</p></div>
                <div class=\"button\">
                
                <a href=\"checkout.php\">Check out<ion-icon name=\"arrow-forward-outline\" size=\"small\"></ion-icon></a>
            </div>";
            
        }
               
            
?>
    
    </article>
</main>
<?php include('footer.php');?>
<script>
     document.getElementById('go-back').addEventListener('click', () => {
    window.history.back();
}); 
</script>
</body>

</html>
