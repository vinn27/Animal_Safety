<?php

$itemName = "Demo Product"; 
$itemPrice = 25;  
$currency = "USD"; 

$con = mysqli_connect("localhost", "root", "", "animal") or die("connection failded");

define('STRIPE_API_KEY', 'LIVE_API_Secret_key'); 
define('STRIPE_PUBLISHABLE_KEY', 'LIVE_API_Publishable_key');
?>