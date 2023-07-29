<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Document</title>
    <title>Document</title>
</head>
<body>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Stripe</h3>
            
            <!-- Product Info -->
            <p><b>Item Name:</b> <?php echo $itemName; ?></p>
            <p><b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
        </div>
        <div class="panel-body">
            <!-- Display status message -->
            <div id="paymentResponse" class="hidden"></div>
            
            <!-- Display a payment form -->
            <form id="paymentFrm" class="hidden">
                <div class="form-group">
                    <label>NAME</label>
                    <input type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
                </div>
                <div class="form-group">
                    <label>EMAIL</label>
                    <input type="email" id="email" class="field" placeholder="Enter email" required="">
                </div>
                
                <div id="paymentElement">
                    <!--Stripe.js injects the Payment Element-->
                </div>
                
                <!-- Form submit button -->
                <button id="submitBtn" class="btn btn-success">
                    <div class="spinner hidden" id="spinner"></div>
                    <span id="buttonText">Pay Now</span>
                </button>
            </form>
            
            <!-- Display processing notification -->
            <div id="frmProcess" class="hidden">
                <span class="ring"></span> Processing...
            </div>
            
            <!-- Display re-initiate button -->
            <div id="payReinit" class="hidden">
                <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
            </div>
        </div>
    </div>
</body>
</html>