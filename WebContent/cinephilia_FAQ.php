<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - FAQ's</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="cinephilia.css">
        <script src="cinephilia.js" defer></script>
        <style>
            #faq{
                text-align: justify;
            }

            ul{
                list-style: none;
            }

            #faq li{
                margin-bottom: 15px;
            }

            h5::first-letter{
                font-family: 'Jacques Francois Shadow';
                font-weight: bold;
            }

            li p::first-letter{
                font-family: 'Jacques Francois Shadow';
                font-weight: bold;
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
            <section id="search">
                <form action="cinephilia_search.php" method="GET">
                    <input type="text" placeholder="Search..." name="search" class="input-field" id="js-voice-output">
                    <button type="button" class="input-field__microphone"><i class="fa fa-microphone"></i></button>
                    <button type="submit" class="input-field__button"><i class="fa fa-search"></i></button>
                </form>
            </section>
            <section id="faq">
                <ul>
                    <li>
                        <h5>Q: Where are you based?</h5>
                        <p>A: Unfortunately, there is not a physical Cinephilia store yet, but you can find what you are searching for in our website.</p>
                    </li>
                    <li>
                        <h5>Q: The tracking number for my order stopped updating, what happened?</h5>
                        <p>A: If you're buying from outside of the EU, your country's customs department may decide to hold your items at the border temporarily, often without explanation! Note: Canada's customs department takes a particularly long time to resolve these holds. This is relatively rare, but if your order is held up in customs, we suggest calling your country's customs department directly and ask that they release your items immediately.</p>
                    </li>
                    <li>
                        <h5>Q: What if I need to return something?</h5>
                        <p>A: No worries! Contact us right away and we'll help guide you through the process - we'll send you a prepaid mailer to send the item back.</p> 
                    </li>
                    <li>
                        <h5>Q: How do we contact you?</h5>
                        <p>A: You can contact us via <a href="mailto:harisantoniadi@gmail.com">email</a> or <a href="tel:+30210 4142000">phone</a>, or even through our social media.</p>
                    </li>
                    <li>
                        <h5>Q: How long does it take to ship my order?</h5>
                        <p>A: Orders are usually shipped within 1-2 business days after placing the order.</p>
                    </li>
                    <li>
                        <h5>Q: When will my order arrive?</h5>
                        <p>A: Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation email you’ve received.</p>
                    </li>    
                    <li>      
                        <h5>Q: How do I track my order?</h5>       
                        <p>A: Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.</p>
                    </li>
                    <li>      
                        <h5>Q: What’s your return policy?</h5>       
                        <p>A: We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.</p>
                    </li>
                    <li>      
                        <h5>Q: What shipping options do you have?</h5>       
                        <p>A: For Greece domestic orders we offer ACS and Geniki Taxydromiki shipping.</p>
                    </li>
                    <li>      
                        <h5>Q: Do you ship internationally?</h5>      
                        <p>A: We currently only ship to Europe.</p>
                    </li>
                    <li>      
                        <h5>Q: Do you sell gift cards?</h5>       
                        <p>A: Unfortunately there is not a gift card option yet.</p>
                    </li>
                    <li>      
                        <h5>Q: Can I receive a refund?</h5>       
                        <p>A: If you are unhappy with the product you’ve received, you can get a refund.</p>
                    </li>
                    <li>      
                        <h5>Q: What payment methods do you accept?</h5>       
                        <p>A: Any method of payments acceptable by you. For example: We accept MasterCard, Visa, American Express, PayPal.</p>
                    </li>
                </ul>
                     
            </section>
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