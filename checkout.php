<?php
    session_start();
    $session_id = session_id();

 include('header.php');
 ?>
<main>
    <div class="cartbutton">
        <button id="go-back">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </button>
        <h2>Order Information</h2>
    </div>
    <div class="checkout">
    <form method="post" action="checkout_post.php" name="cart_info">
        <div class="namewrap">
            <input type="text" placeholder="First name" id="fname" name="fname" required>
            
            <input type="text" placeholder="Last name" id="lname" name="lname" required>
        </div>
        <!-- <div class="mailwrap"> -->
        <input type="email" placeholder="Email address" id="email" name="email" required>
        <!-- </div> -->
        
        
        <input class="submitbtn" type="submit" value="Place an order">
        
    </form>

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