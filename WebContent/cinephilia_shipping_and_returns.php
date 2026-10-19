<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Shipping & Returns</title>
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
            #shipping{
                text-align: justify;
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
            <section id="shipping">
                <h1>Return and Refund Policy</h1>
                <p>Last updated: February 04, 2022</p>
                <p>Thank you for shopping at Cinephilia.</p>
                <p>If, for any reason, You are not completely satisfied with a purchase We invite You to review our policy on refunds and returns. This Return and Refund Policy has been created with the help of the <a href="https://www.privacypolicies.com/return-refund-policy-generator/" target="_blank">Return and Refund Policy Generator</a>.</p>
                <p>The following terms are applicable for any products that You purchased with Us.</p>

                <h1>Interpretation and Definitions</h1>

                <h2>Interpretation</h2>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

                <h2>Definitions</h2>
                <p>For the purposes of this Return and Refund Policy:</p>
                <ul>
                    <li>
                        <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Cinephilia, Karaoli ke Dimitriou 80, Pireas 185 34.</p>
                    </li>
                    <li>
                        <p><strong>Goods</strong> refer to the items offered for sale on the Service.</p>
                    </li>
                    <li>
                        <p><strong>Orders</strong> mean a request by You to purchase Goods from Us.</p>
                    </li>
                    <li>
                        <p><strong>Service</strong> refers to the Website.</p>
                    </li>
                    <li>
                        <p><strong>Website</strong> refers to Cinephilia, accessible from <a href="www.cinephilia.com" rel="external nofollow noopener" target="_blank">www.cinephilia.com</a></p>
                    </li>
                    <li>
                        <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                    </li>
                </ul>

                <h1>Your Order Cancellation Rights</h1>
                <p>You are entitled to cancel Your Order within 14 days without giving any reason for doing so.</p>
                <p>The deadline for cancelling an Order is 14 days from the date on which You received the Goods or on which a third party you have appointed, who is not the carrier, takes possession of the product delivered.</p>
                <p>In order to exercise Your right of cancellation, You must inform Us of your decision by means of a clear statement. You can inform us of your decision by:</p>
                <ul>
                    <li>
                        <p>By email: harisantoniadi@gmail.com</p>
                    </li>
                    <li>
                        <p>By phone number: 21 0414 2000</p>
                    </li>
                </ul>
                <p>We will reimburse You no later than 14 days from the day on which We receive the returned Goods. We will use the same means of payment as You used for the Order, and You will not incur any fees for such reimbursement.</p>

                <h1>Conditions for Returns</h1>
                <p>In order for the Goods to be eligible for a return, please make sure that:</p>
                <ul>
                    <li>The Goods were purchased in the last 14 days</li>
                    <li>The Goods are in the original packaging</li>
                </ul>
                <p>The following Goods cannot be returned:</p>
                <ul>
                    <li>The supply of Goods made to Your specifications or clearly personalized.</li>
                    <li>The supply of Goods which according to their nature are not suitable to be returned, deteriorate rapidly or where the date of expiry is over.</li>
                    <li>The supply of Goods which are not suitable for return due to health protection or hygiene reasons and were unsealed after delivery.</li>
                    <li>The supply of Goods which are, after delivery, according to their nature, inseparably mixed with other items.</li>
                </ul>
                <p>We reserve the right to refuse returns of any merchandise that does not meet the above return conditions in our sole discretion.</p>
                <p>Only regular priced Goods may be refunded. Unfortunately, Goods on sale cannot be refunded. This exclusion may not apply to You if it is not permitted by applicable law.</p>

                <h1>Returning Goods</h1>
                <p>You are responsible for the cost and risk of returning the Goods to Us. You should send the Goods at the following address:</p>
                <p>Karaoli ke Dimitriou 80, Pireas 185 34</p>
                <p>We cannot be held responsible for Goods damaged or lost in return shipment. Therefore, We recommend an insured and trackable mail service. We are unable to issue a refund without actual receipt of the Goods or proof of received return delivery.</p>

                <h1>Gifts</h1>
                <p>If the Goods were marked as a gift when purchased and then shipped directly to you, You'll receive a gift credit for the value of your return. Once the returned product is received, a gift certificate will be mailed to You.</p>
                <p>If the Goods weren't marked as a gift when purchased, or the gift giver had the Order shipped to themselves to give it to You later, We will send the refund to the gift giver.</p>

                <h2>Contact Us</h2>
                <p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>
                <ul>
                    <li>
                        <p>By email: harisantoniadi@gmail.com</p>
                    </li>
                    <li>
                        <p>By phone number: 21 0414 2000</p>
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