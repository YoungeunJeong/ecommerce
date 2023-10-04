<?php
 $server = "localhost";
 $username = "yjeongca_yjeong";
 $password = "uX!1Tpa_ho*r";
 $database = "yjeongca_mmda223_ecommerce";

 $connection = mysqli_connect($server,$username,$password,$database);
 if(!$connection){
     die(mysqli_connect_error());
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HATSHEPSUT Cosmetics</title>
    <link rel="stylesheet" href="styles.css">
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>     

<body>
    <header>
        <div id="header">
            <div class="container">
                    
                            <nav>
                                <div id="menuToggle">
                                  <input type="checkbox" />
                               
                                  <span></span>
                                  <span></span>
                                  <span></span>
                                  
                                  <ul id="menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="products.php">Shop</a></li>
                                    <li><a href="about.php">About</a></li>
                                   <li><a href="cart.php" class="cartbtn"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 32.5 47">
                                        <path id="Icon_awesome-shopping-bag" data-name="Icon awesome-shopping-bag" d="M24.75,11.25V9a9,9,0,0,0-18,0v2.25H0V40.375A5.625,5.625,0,0,0,5.625,46h20.25A5.625,5.625,0,0,0,31.5,40.375V11.25ZM11.25,9a4.5,4.5,0,0,1,9,0v2.25h-9ZM22.5,17.438a1.688,1.688,0,1,1,1.688-1.687A1.687,1.687,0,0,1,22.5,17.438Zm-13.5,0a1.688,1.688,0,1,1,1.688-1.687A1.687,1.687,0,0,1,9,17.438Z" transform="translate(0.5 0.5)" stroke="#000" stroke-width="1"/>
                                      </svg></a></li>
                                      <li class="carttext">view cart</li>
                                  </ul>
                                </div>
                              </nav>
                            
                        
                            <a href="index.php">
                                <div class="header-logo"></div>
                            </a>
                        
                        <div>
                            <a href="cart.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" viewBox="0 0 32.5 47">
                                <path data-name="Icon awesome-shopping-bag" d="M24.75,11.25V9a9,9,0,0,0-18,0v2.25H0V40.375A5.625,5.625,0,0,0,5.625,46h20.25A5.625,5.625,0,0,0,31.5,40.375V11.25ZM11.25,9a4.5,4.5,0,0,1,9,0v2.25h-9ZM22.5,17.438a1.688,1.688,0,1,1,1.688-1.687A1.687,1.687,0,0,1,22.5,17.438Zm-13.5,0a1.688,1.688,0,1,1,1.688-1.687A1.687,1.687,0,0,1,9,17.438Z" transform="translate(0.5 0.5)" stroke="#000" stroke-width="1"/>
                                </svg>
                            </a>
                        </div>
                    </div>
            </div>
        
        
        
    </header>