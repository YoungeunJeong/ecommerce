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
    
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $comment = mysqli_real_escape_string($connection,$_POST['comment']);
    $ratings = $_POST['ratings'];
    $product_id = $_POST['product_id'];
    
    $query = "INSERT INTO review (name, comment, rating, product_id) VALUES ('$name','$comment','$ratings','$product_id')";
    mysqli_query($connection,$query);
    echo "$ratings";
   
        

        
    ?>

</article>
 <script>
     alert('Thank you for Your feedback!');
    location.href=('detail.php?page=<?php echo $product_id?>');
 </script>
