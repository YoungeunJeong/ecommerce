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
$id=$_GET['id'];

$query = "DELETE FROM temp_cart WHERE id='$id' and session_id='$session_id' ";
mysqli_query($connection,$query);

?>
<script>
    location.href="cart.php";
</script>