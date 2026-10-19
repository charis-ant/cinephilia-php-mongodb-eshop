<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Privacy Policy</title>
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
            #policy{
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
            <section id="policy">
                <h1>Privacy Policy for Cinephilia</h1>
                <p>At Cinephilia, accessible from www.cinephilia.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Cinephilia and how we use it.</p>
                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
                <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Cinephilia. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info">Free Privacy Policy Generator</a>.</p>

                <h2>Consent</h2>
                <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

                <h2>Information we collect</h2>
                <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

                <h2>How we use your information</h2>
                <p>We use the information we collect in various ways, including to:</p>
                <ul>
                <li>Provide, operate, and maintain our website</li>
                <li>Improve, personalize, and expand our website</li>
                <li>Understand and analyze how you use our website</li>
                <li>Develop new products, services, features, and functionality</li>
                <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                <li>Send you emails</li>
                <li>Find and prevent fraud</li>
                </ul>

                <h2>Log Files</h2>
                <p>Cinephilia follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

                <h2>Advertising Partners Privacy Policies</h2>
                <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Cinephilia.</p>
                <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Cinephilia, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
                <p>Note that Cinephilia has no access to or control over these cookies that are used by third-party advertisers.</p>

                <h2>Third Party Privacy Policies</h2>
                <p>Cinephilia's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
                <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

                <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
                <p>Under the CCPA, among other rights, California consumers have the right to:</p>
                <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
                <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
                <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
                <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

                <h2>GDPR Data Protection Rights</h2>
                <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
                <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
                <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
                <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
                <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
                <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
                <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
                <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

                <h2>Children's Information</h2>
                <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
                <p>Cinephilia does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
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