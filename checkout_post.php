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
 
 
 

 $fname = mysqli_real_escape_string($connection,$_POST['fname']);
 $lname = mysqli_real_escape_string($connection,$_POST['lname']);
 $email = mysqli_real_escape_string($connection,$_POST['email']);
 $cname = $fname." ".$lname;

 $query = "SELECT sum(product_price), group_concat(distinct product_name order by product_name),session_id, product_id from temp_cart group by session_id";
 $order_id=date("Ymdhis");
 $sql = mysqli_query($connection,$query);
 $row = mysqli_fetch_array($sql);
 $total_cost=($row[0])*1.05+10;
 $session_id=$row['session_id'];
    
 $query = "INSERT INTO orders (cname, email,total_cost,p_products,order_id,session_id) VALUES ('$cname','$email','$total_cost','$row[1]','$order_id','$session_id')";
 mysqli_query($connection,$query);
?>

</article>
 <script>
     
    location.href="complete.php";
 </script>
