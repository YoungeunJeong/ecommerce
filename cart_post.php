<?php session_start();
      $session_id = session_id();
?>

<?php
 $server = "localhost";
 $username = "yjeongca_yjeong";
 $password = "uX!1Tpa_ho*r";
 $database = "yjeongca_mmda223_ecommerce";

 $connection = mysqli_connect($server,$username,$password,$database);
 if(!$connection){
     die(mysqli_connect_error());
 }
 $product_id = $_POST['product_id'];
 $query = "SELECT product_name, tn_image,product_price FROM products WHERE product_id='$product_id'";
         $sql = mysqli_query($connection,$query);
         $row = mysqli_fetch_array($sql);
   
         $tn_image = $row['tn_image'];
         $product_name = $row['product_name'];
         $tn_image = $row['tn_image'];
         $product_price = $row['product_price'];
         $money = $_POST['qtt'] * $product_price;

        $query = "INSERT INTO temp_cart (product_img, product_price, product_name, session_id, product_id) VALUES ('$tn_image', '$product_price', '$product_name', '$session_id', '$product_id')";
        $sql = mysqli_query($connection,$query);
        ?>

</article>
 <script>
     
    window.location.href = 'cart.php';
 </script>
