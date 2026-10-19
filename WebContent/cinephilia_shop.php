<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Shop</title>
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
          #listings{
            overflow: hidden;
          }

          #listings img {
            width: 100%;
            overflow: hidden;
            border-radius: 2% 2% 0 0;
            
          }

          .col-lg-3, .col-md-6, .col-sm-12{
            margin-bottom: 20px;
            margin-top: 10px;
          }

          .listing{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
          }

          .images {
            height: 15em;
            background-size: cover; 
            background-position: center center; 
            background-repeat: no-repeat;
            border-radius: 2% 2% 0 0;
            transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
          }

          .images:hover {
            transform: scale(1.2);
            overflow: hidden;
            border-radius: 2%;
          }

          .text-box {
            width: 100%;
            float: left;
            border: 0.01em solid #dddbdb;
            border-radius: 0 0 2% 2%;
            padding: 1em;
          }

          h2, h3 {
            float: left;
            font-weight: 400;
            font-size: 1em;
            margin: 0.2em auto;
          }

          .item, .price {
            clear: left;
            width: 100%;
            text-align: center;
          }

          .price {
            color: Grey;
          }

          #item-button {
            float: left;
            clear: left;
            width: 100%;
            font-weight: 300;
            font-size: 1em;
            text-align: center;
            margin: 0.2em auto;
            background-color: #f3ebd2;
            border: none;
	          cursor: pointer;
          }

          #item-button:hover {
            background-color: #bb8c64;
          }

          @media (min-width:768px) and (max-width:992px){
            .listing{
              width: 80%;
            }
          }

          @media (max-width: 767px){
            .listing{
              width: 50%;
            }
          }

          .add, .remove{
            text-decoration: none;
            color: black;
          }

          .add:hover, .remove:hover{
            text-decoration: none;
            color: black;
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
          <section id="listings">
            <div class="row" style="clear: both;">
              <?php $cursor = $collection_products->find();
                $modal_index = 0;
                foreach ($cursor as $document){?>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="listing">
                      <img class="images" src="<?php echo $document->image?>" alt="<?php echo $document->product_name?>"/>
                      <div class="text-box">
                        <h2 class="item"><?php echo $document->product_name?></h2>
                        <h3 class="price"><?php echo $document->price?>&euro;</h3>
                        <button type="button" data-toggle="modal" data-target="#myModal<?php echo $modal_index?>" id="item-button">View Details</button>
                        <div class="modal fade" id="myModal<?php echo $modal_index?>" role="dialog">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h2><?php echo $document->product_name?></h2>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-6 product_img">
                                    <img class="modal__img" src="<?php echo $document->image?>" alt="<?php echo $document->product_name?>"/>
                                  </div>
                                  <div class="col-md-6 product_content">
                                    <h6>Genre: <?php echo $document->genre?></h6>
                                    <h6><?php echo $document->collection?> Collection</h6>
                                    <h6><?php echo $document->price?>&euro;</h6>
                                    <div id="review">add reviews here</div>
                                    <button id="item-button"><a class="add" href="cinephilia_add_to_cart.php?product=<?php echo $document->product_name?>">Add to Cart</a></button>
                                    <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {?>
                                      <?php $current_user = $collection_users->findOne(array('Email'=> $_SESSION['user_email'])); $user_favourites = $current_user->Favourites; $flag = false;?>
                                      <?php foreach ($user_favourites as $fav_product){
                                      foreach ($fav_product as $k => $v){
                                          if ($document->product_name == $v){
                                          $flag = true;
                                          break;
                                          }
                                      }
                                      }?>
                                      <?php if ($flag == true){?>
                                          <button id="item-button"><a class="remove" href="cinephilia_remove_from_favourites.php?product=<?php echo $document->product_name?>">Remove From Favourites</a></button>
                                      <?php }else{?>
                                          <button id="item-button"><a class="add" href="cinephilia_add_to_favourites.php?product=<?php echo $document->product_name?>">Add To Favourites  <i id="heart" class="fa fa-heart"></i></a></button>
                                      <?php } ?>
                                    <?php }else{?>
                                      <button id="item-button"><a class="add" href="cinephilia_add_to_favourites.php?product=<?php echo $document->product_name?>">Add To Favourites  <i id="heart" class="fa fa-heart"></i></a></button>
                                    <?php } ?>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php $modal_index++;}?>
            </div>
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