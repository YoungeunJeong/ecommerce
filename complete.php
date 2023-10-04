<?php
    session_start();
    $session_id = session_id();
?>
<?php include('header.php');?>
<main>
    <article class="cplt">
<?php

    $query ="SELECT * FROM orders WHERE session_id ='$session_id'";
    $sql = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($sql) ; $email = $row['email'];
    $p_products = $row['p_products'];
    $cname = $row['cname'];
    $total_cost = $row['total_cost'];
    $order_id = $row['order_id'];
    $session_id = $row['session_id'];
    echo "
        <h1>Thank you for shopping $cname!</h1>
        <h6 class=\"infoh6\">Your Order Information</h6>
        <div class=\"od_info\">
        
        <ul class=\"info\">
        <li>Order name: $cname</li>
        <li>Order #$order_id</li>
        <li>Your email : $email</li>
        <li>Purchased product(s) : $p_products</li>
      
        <li>Total cost: $ $total_cost CAD</li>
        
        </ul>
        </div>
    ";
    $query = "DELETE FROM temp_cart WHERE session_id='$session_id'";
    $sql = mysqli_query($connection,$query);

    
?>
        <div class="button">
                <a href="products.php">Shop ></a>
            </div>
</article>
</main>
<?php include('footer.php'); ?>
</body>
</html>