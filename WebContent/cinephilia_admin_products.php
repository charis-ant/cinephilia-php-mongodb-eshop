<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Admin Products</title>
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
            header {
                text-align: center;
                background-color: #946c34;
                font-size: 40px;
            }

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

            .text-box {
                width: 100%;
                float: left;
                border: 0.01em solid #dddbdb;
                border-radius: 0 0 2% 2%;
                padding: 1em;
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

            .navigation > a{
                display: block;
                height: 60px;
                line-height: 60px;
                padding: 0 10px;
                color: #f3ebd2;
                font-size: 20px;
            }

            section{
                margin-bottom: 100px;
            }

            section > h3{
                text-align: center;
            }

            form{
                font-size: 18px;
                margin-left: 15px;
                margin-right: 15px;
                margin-top: 20px;
            }

            label::before{
                margin: 28px 0 0;
                font-size: 14px;
                color: #5a5a5a;
            }

            input{
                margin-bottom: 15px;
                width: 100%;
                padding: 10px;
                background: none;
                outline: none;
                border: 0;
                border-bottom: 2px solid rgb(65, 56, 50);
            }

            .required{
                color: red;
            }

            input:focus{
                transition: all 0.3s;
                border-bottom: 2px solid rgb(228, 161, 18);
            }

            .form-button{
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

            .form-button:hover{
                transition: all 0.3s;
                background: rgb(228, 161, 18);
                border: 2px solid rgb(228, 161, 18);
                color: rgb(235,235,235);
            }
        </style>
    </head>
    <body>
        <header>
            Cinephilia Admin Products Page
        </header>
        <div class="navigation d-flex justify-content-center">
            <a href="cinephilia_admin_home.php" target="_self">Home</a>
            <a href="cinephilia_admin_users.php" target="_self">Users</a>
            <a href="cinephilia_admin_products.php" target="_self">Products</a>
            <a href="cinephilia_admin_orders.php" target="_self">Orders</a>
            <a href="cinephilia_logout.php">Logout</a>
        </div>
        <div class="container">
            <div class="row">
                <section id="listings">
                    <div class="row" style="clear: both;">
                        <?php $cursor = $collection_products->find();
                            $modal_index = 0;
                            foreach ($cursor as $document){?>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="listing">
                                <img class="images" src="<?php echo $document->image?>" alt="<?php echo $document->product_name?>"/>
                                <div class="text-box">
                                    <h6 class="item"><?php echo $document->product_name?></h6>
                                    <h6 class="price"><?php echo $document->price?>&euro;</h6>
                                    <button type="button" data-toggle="modal" data-target="#myModal<?php echo $modal_index?>" id="item-button">View Details</button>
                                    <div class="modal fade" id="myModal<?php echo $modal_index?>" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h4><?php echo $document->product_name?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                            <div class="col-md-6 product_img">
                                                <img class="modal__img" src="<?php echo $document->image?>" alt="Get Out Poster">
                                            </div>
                                            <div class="col-md-6 product_content">
                                                <h6>Genre: <?php echo $document->genre?></h6>
                                                <h6><?php echo $document->collection?> Collection</h6>
                                                <h6><?php echo $document->price?>&euro;</h6>
                                                <div id="review">add reviews here</div>
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
            <hr>
            <div class="row">
                <section class="col-lg-4">
                    <h3>Add a new product</h3>
                    <form method="POST" action="cinephilia_admin_add_product.php"> 
                        <label for="product_name">Product Name<span class="required"> *</span></label>
                        <input type="text" id="product_name" name="product_name" required="required" placeholder="Enter product name">
                        
                        <label for="genre">Genre<span class="required"> *</span></label>
                        <input type="text" id="genre" name="genre" required="required" placeholder="Enter genre">
                        
                        <label for="collection">Collection<span class="required"> *</span></label>
                        <input type="text" id="collection" name="collection" required="required" placeholder="Enter collection type">

                        <label for="price">Price<span class="required"> *</span></label>
                        <input type="text" id="price" name="price" required="required" placeholder="Enter item's price">

                        <label for="url">Image Location<span class="required"> *</span></label>
                        <input type="text" id="url" name="url" required="required" placeholder="Enter image's url">
                        
                        <button class="form-button" type="submit">Submit</button>
                        <p><span class="required">*</span>Required field</p>
                    </form>
                </section>
                <section class="col-lg-4">
                    <h3>Update a product</h3>
                    <form method="POST" action="cinephilia_admin_update_product.php"> 
                        <label for="product_name">Product Name<span class="required"> *</span></label>
                        <input type="text" id="product_name" name="product_name" required="required" placeholder="Enter product name">

                        <label for="new_product_name">Product name</label>
                        <input type="text" id="new_product_name" name="new_product_name" placeholder="Enter new product name">
                        
                        <label for="genre">Genre</label>
                        <input type="text" id="genre" name="genre" placeholder="Enter new genre">
                        
                        <label for="collection">Collection</label>
                        <input type="text" id="collection" name="collection" placeholder="Enter new collection type">

                        <label for="price">Price</label>
                        <input type="text" id="price" name="price" placeholder="Enter new item price">

                        <label for="url">Image Location</label>
                        <input type="text" id="url" name="url" placeholder="Enter new image url">
                        
                        <button class="form-button" type="submit">Submit</button>
                        <p><span class="required">*</span>Required field</p>
                    </form>
                </section>
                <section class="col-lg-4">
                    <h3>Delete a product</h3>
                    <form method="POST" action="cinephilia_admin_delete_product.php"> 
                        <label for="product_name">Product Name<span class="required"> *</span></label>
                        <input type="text" id="product_name" name="product_name" placeholder="Enter product name">                    
                        <button class="form-button" type="submit">Submit</button>
                        <p><span class="required">*</span>Required field</p>
                    </form>
                </section>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-6">
                    <h6><b><u>About</b></u></h6>
                    <p>
                        Cinephilia is an online store that sells ecological decorative posters with designs by independent artists, with a cinema theme. There is a constant demand in the market for ideas and ways of decorating our personal and/or work spaces.
                    </p>
                </div>
                <div class="col-lg-6">
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