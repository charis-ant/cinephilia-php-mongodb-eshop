<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Cart</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="cinephilia.css">
        <script src="cinephilia.js" defer></script>
        <style>
            .payment-info {
                background: #bb8c64;
                padding: 10px;
                border-radius: 6px;
                color: rgb(51, 43, 38);
                font-weight: bold
            }

            .product-details {
                padding: 10px
            }

            .p-about {
                font-size: 12px
            }

            .table-shadow {
                -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
                box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42)
            }

            .type {
                font-weight: 400;
                font-size: 10px
            }

            label.radio {
                cursor: pointer
            }

            label.radio input {
                position: absolute;
                top: 0;
                left: 0;
                visibility: hidden;
                pointer-events: none
            }

            label.radio span {
                padding: 1px 12px;
                border: 2px solid #413832;
                display: inline-block;
                border-radius: 3px;
                text-transform: uppercase;
                font-size: 11px;
                font-weight: 300
            }

            label.radio input:checked+span {
                border-color: #fff;
                background-color: #bb8c64;
                color: #fff
            }

            .credit-inputs {
                background: #61442b;
                color: #fff !important;
                border-color: #61442b;
            }

            .credit-inputs::placeholder {
                color: #bdb8b8;
                font-size: 13px
            }

            .credit-card-label {
                font-size: 9px;
                font-weight: 300
            }

            .form-control.credit-inputs:focus {
                background: #61442b;
                border: none;
                box-shadow: 0 0 0 0.2rem #413832;
            }

            .line {
                border-bottom: 1px solid #61442b
            }

            .information span {
                font-size: 12px;
                font-weight: 500
            }

            .information {
                margin-bottom: 5px
            }

            .items {
                -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
                box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08)
            }

            .spec {
                font-size: 11px
            }

            .payment-info button{
                background: #61442b;
                border: none;
                box-shadow: none !important;
                
            }

            .payment-info button:hover{
                background: #61442b !important;
                box-shadow: 0 0 0 0.2rem #413832 !important;
            }

            .payment-info button:focus{
                border: none !important;
                box-shadow: 0 0 0 0.2rem #413832 !important;
            }

            .payment-info button a{
                margin-left: auto !important;
                margin-right: auto !important;
                text-decoration: none;
                color: white;
            }

            #login form, #sign-up form, .logged form{
                font-size: 18px;
                margin-left: 15px;
                margin-right: 15px;
                margin-top: 20px;
            }

            #login label::before, #sign-up label::before, .logged label::before{
                margin: 28px 0 0;
                font-size: 14px;
                color: #5a5a5a;
            }

            #login input, #sign-up input, .logged input{
                margin-bottom: 15px;
                width: 100%;
                padding: 10px;
                background: none;
                outline: none;
                border: 0;
                border-bottom: 2px solid rgb(65, 56, 50);
            }

            #login .required, #sign-up .required, .logged .required{
                color: red;
            }

            #login input:focus, #sign-up input:focus, .logged input:focus{
                transition: all 0.3s;
                border-bottom: 2px solid rgb(228, 161, 18);
            }

            #login .form-button, #sign-up .form-button, .logged .form-button{
                float: right;
                padding: 8px 12px;
                margin-top: 20px;
                margin-right: 20px;
                border: 2px solid rgb(65, 56, 50);
                background: 0;
                color: rgb(65, 56, 50);
                cursor: pointer;
                clear: both;
            }

            #login .form-button:hover, #sign-up .form-button:hover, .logged .form-button:hover{
                transition: all 0.3s;
                background: rgb(228, 161, 18);
                border: 2px solid rgb(228, 161, 18);
                color: rgb(235,235,235);
            }

            #vl{
                transform: rotate(90deg);
            }

            @media (max-width:992px) {
                #vl{
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <header align="center" id="top">
            Free Shipping on all orders over 30&euro;
        </header>
        <div class="navigation">
            <a href="cinephilia_home.php" target="_self" id="middle"><img src="images/film.png" alt="company logo"/></a>
            <nav>
                <div class="icon-bar" onclick="Show()">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <span id="nav-menu">
                    <i class="close" onclick="Hide()"><i class="fa fa-remove" style="font-size:44px;"></i></i>
                    <a href="cinephilia_home.php" target="_self" id="middle">Home</a>
                    <a href="cinephilia_about_us.php" target="_self">About Us</a>
                    <a href="cinephilia_shop.php" target="_self">Shop</a>
                    <a class="mobile-nav" href="cinephilia_account.php" target="_self">Account <i class="fa fa-user"></i></a>
                    <a class="mobile-nav" href="cinephilia_cart.php" target="_self">Cart <i class="material-icons">local_mall</i></a>
                    <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {?>
                        <a class="mobile-nav" href="cinephilia_logout.php">Logout</a>
                    <?php } ?>
                    <span class="right-nav">
                        <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {?>
                            <div class="dropdown">
                                <a href="cinephilia_account.php" target="_self">Account <i class="fa fa-user"></i></a>
                                <div class="dropdown-content">
                                    <a href="cinephilia_logout.php">Logout</a>
                                </div>
                            </div>
                        <?php } else{?>
                            <a href="cinephilia_account.php" target="_self">Account <i class="fa fa-user"></i></a>
                        <?php } ?>
                        <a href="cinephilia_cart.php" target="_self">Cart <i class="fa fa-shopping-bag"></i></a>
                    </span>
                </span>
            </nav>
        </div>
        <div class="container">
            <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {?>
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="product-details mr-2">
                            <div class="d-flex flex-row align-items-center">
                                <i class="fa fa-long-arrow-left"></i>
                                <span class="ml-2"><a href="cinephilia_shop.php" target="_self" style="text-decoration: none; color:black;">Continue Shopping</a></span>
                            </div>
                            <hr>
                            <h6 class="mb-0">Shopping cart</h6>
                            <?php $cursor = $collection_users->findOne(array('Email'=> $_SESSION['user_email']));
                            $user_cart = $cursor->Cart;
                            $user_cart2 = $cursor->Cart;
                            $subtotal = 0;
                            $shipping = 0;
                            $counter = 0;
                            foreach ($user_cart2 as $document){
                                $counter++;
                            }?>
                            <?php if (empty($counter)){ ?>
                                <h3 style="margin-top: 20px;">Nothing found in cart.</h3>
                            <?php } else { ?>
                                <?php foreach ($user_cart as $document){
                                    $product = $collection_products->findOne(array('product_name' => $document->product_name))?>
                                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                                        <div class="d-flex flex-row">
                                            <img class="rounded" src="<?php echo $product->image?>" width="40">
                                            <div class="ml-2">
                                                <span class="font-weight-bold d-block"><?php echo $document->product_name?></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <span class="d-block ml-5 font-weight-bold"><?php echo $product->price?>&euro;</span>
                                            <a href="cinephilia_remove_from_cart.php?product=<?php echo $document->product_name?>" style="color: black;"><i class="fa fa-trash-o ml-3 text-black-50"></i></a>
                                        </div>
                                    </div>
                                    <?php $subtotal = $subtotal + $product->price;?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Card details</h4>
                            </div>
                            <span class="type d-block mt-3 mb-1" style="font-weight: bold !important; font-size:12px !important;">Card type</span>
                            <label class="radio"> 
                                <input type="radio" name="card" value="payment" checked> 
                                <span><i style="font-size:30px" class="fa fa-cc-mastercard"></i></span> 
                            </label>
                            <label class="radio"> 
                                <input type="radio" name="card" value="payment"> 
                                <span><i style="font-size:30px" class="fa fa-cc-visa"></i></span> 
                            </label>
                            <label class="radio"> 
                                <input type="radio" name="card" value="payment"> 
                                <span><i style="font-size:30px" class="fa fa-cc-amex"></i></span> 
                            </label>
                            <label class="radio"> 
                                <input type="radio" name="card" value="payment"> 
                                <span><i style="font-size:30px" class="fa fa-cc-diners-club"></i></span> 
                            </label>
                            <label class="radio"> 
                                <input type="radio" name="card" value="payment"> 
                                <span><i style="font-size:30px" class="fa fa-paypal"></i></span> 
                            </label>
                            <div>
                                <label class="credit-card-label" style="font-weight: bold !important; font-size:12px !important;">Name on card</label>
                                <input type="text" class="form-control credit-inputs" placeholder="Name" required>
                            </div>
                            <div>
                                <label class="credit-card-label" style="font-weight: bold !important; font-size:12px !important;">Card number</label>
                                <input type="text" pattern="[0-9]*" maxlength="16" inputmode="numeric" required class="form-control credit-inputs" placeholder="0000 0000 0000 0000">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="credit-card-label" style="font-weight: bold !important; font-size:12px !important;">Expiration Date</label>
                                    <input type="text" pattern="[0-9]*" maxlength="5" class="form-control credit-inputs" inputmode="numeric" required placeholder="12/24">
                                </div>
                                <div class="col-md-6">
                                    <label class="credit-card-label" style="font-weight: bold !important; font-size:12px !important;">CVV</label>
                                    <input type="text" pattern="[0-9]*" maxlength="3" class="form-control credit-inputs" inputmode="numeric" required placeholder="342">
                                </div>
                            </div>
                            <hr class="line">
                            <div class="d-flex justify-content-between information">
                                <span>Subtotal</span><span><?php echo $subtotal?>&euro;</span>
                            </div>
                            <div class="d-flex justify-content-between information">
                                <span>Shipping</span>
                                <?php if ($subtotal >= 30){?>
                                    <span><?php echo "(Free Shipping) ".$shipping;?>&euro;</span>
                                <?php }else{?>
                                    <span><?php $shipping = 4; echo $shipping?>&euro;</span>
                                <?php } ?>
                            </div>
                            <div class="d-flex justify-content-between information">
                                <span>Total</span>
                                <span><?php $total = $subtotal+$shipping; echo $total;?>&euro;</span>
                            </div>
                            <button class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button">
                                <a href="cinephilia_checkout.php?total=<?php echo $total?>">Checkout</a>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } else{?>
                <section id="sign-up">
                    <div class="col-lg-6">
                        <br><br>
                        <h3>Sign Up</h3>
                        <form method="POST" action="cinephilia_register.php"> 
                            <label for="name">Name<span class="required"> *</span></label>
                            <input type="text" id="name" name="name" required="required" placeholder="Enter your full name">
                            
                            <label for="email">Email<span class="required"> *</span></label>
                            <input type="text" id="email" name="email" required="required" placeholder="Enter your email address">
                            
                            <label for="pass">Password<span class="required"> *</span></label>
                            <input type="text" id="pass" name="pass" required="required" placeholder="Enter your password">
                            
                            <button class="form-button" type="submit">Submit</button>
                            <p><span class="required">*</span>Required field</p>
                        </form><br><br><br>
                    </div>
                </section>
                <hr id="vl">
                <section id="login">
                    <div class="col-lg-6">
                        <h2 style="color:#818a91; font-size: small;">Already have an account?</h2>
                        <h3>Sign In</h3>
                        <form method="POST" action="cinephilia_login.php" > 
                            <label for="email">Email<span class="required"> *</span></label>
                            <input type="text" id="email" name="email" required="required" placeholder="Enter your email address">
                            
                            <label for="pass">Password<span class="required"> *</span></label>
                            <input type="text" id="pass" name="pass" required="required" placeholder="Enter your password">
                            
                            <button class="form-button" type="submit">Submit</button>
                            <p><span class="required">*</span>Required field</p>
                        </form><br>
                    </div>
                </section>
            <?php }?>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-4">
                    <h6><b><u>About</b></u></h6>
                    <p>
                        Cinephilia is an online store that sells ecological decorative posters with designs by independent artists, with a cinema theme. There is a constant demand in the market for ideas and ways of decorating our personal and/or work spaces.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h6><b><u>Categories</b></u></h6>
                    <ul class="list-unstyled">
                        <li><a href="cinephilia_about_us.php" target="_self">About Cinephilia</a></li>
                        <li><a href="cinephilia_FAQ.php" target="_self">FAQ's</a></li>
                        <li><a href="cinephilia_shipping_and_returns.php">Shipping & Return Policies</a></li>
                        <li><a href="cinephilia_privacy_policy.php">Privacy Policy</a></li>
                        <li><a href="cinephilia_terms_and_conditions.php">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6><b><u>Payment Methods</b></u></h6>
                    <ul class="list-unstyled">
                        <li>
                            <i style="font-size:30px" class="fa fa-cc-mastercard"></i>
                            <i style="font-size:30px" class="fa fa-cc-visa"></i>
                            <i style="font-size:30px" class="fa fa-cc-amex"></i>
                            <i style="font-size:30px" class="fa fa-cc-diners-club"></i>
                            <i style="font-size:30px" class="fa fa-paypal"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6"><p class="copyright-text" style="line-height: 90px; text-align: center;">&copy; Cinephilia 2022. All rights reserved.</p></div>
                <div class="col-lg-6">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/ds.unipi.gr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/haarrisa/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="email" href="mailto:harisantoniadi@gmail.com"><i class="material-icons" style="vertical-align: middle;">mail_outline</i></a></li>
                        <li><a class="telephone" href="tel:+30210 4142000"><i class="fa fa-phone" style="vertical-align: middle; font-size:24px;"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>   