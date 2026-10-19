<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Admin Orders</title>
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

            .navigation > a{
                display: block;
                height: 60px;
                line-height: 60px;
                padding: 0 10px;
                color: #f3ebd2;
                font-size: 20px;
            }

            table{
                margin-top: 20px;
            }

            tbody{
                display: table;
                margin: auto;
                justify-content: center;
                align-items: center;
                width: 70%;
            }

            tr{
                text-align: center;
                border: 1px solid #5a6431;
            }

            th{
                padding: 10px;
                color: #f3ebd2;
                background-color: #413832;
            }

            td{
                padding: 10px;
                background-color: rgb(253, 252, 252);
                border: 1px solid #413832;
            }

            footer{
                margin-top: 191px;
            }
        </style>
    </head>
    <body>
        <header>
            Cinephilia Admin Orders Page
        </header>
        <div class="navigation d-flex justify-content-center">
            <a href="cinephilia_admin_home.php" target="_self">Home</a>
            <a href="cinephilia_admin_users.php" target="_self">Users</a>
            <a href="cinephilia_admin_products.php" target="_self">Products</a>
            <a href="cinephilia_admin_orders.php" target="_self">Orders</a>
            <a href="cinephilia_logout.php">Logout</a>
        </div>
        <div class="container">
            <?php 
            $i = 1;

            $condition = array('$and'=>array(
                array("Name"=>array('$ne'=>"admin")),
                array("Orders"=>array('$ne'=>[]))
            ));

            $cursor = $collection_users->find($condition);
            $cursor2 = $collection_users->find($condition);
            $counter = 0;
            foreach ($cursor2 as $document){
                $counter++;
            }
            ?>
            <?php if (empty($counter)){?>
                <h5 style="text-align: center;">No user has made any purchases</h5>
            <?php }else{?>
                <table class="table table-responsive">
                    <tr>
                        <th>#</th>
                        <th>User (Email)</th>
                        <th>Products</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Order Num</th>
                    </tr>
                    <?php foreach ($cursor as $user){?>
                        <?php foreach($user as $key => $value){ ?>
                            <?php if ($key != "Orders") { ?>
                                <?php continue; ?>
                            <?php }else{ ?>
                                <?php foreach ($value as $order){?>
                                    <tr>
                                        <td><b><?php echo $i?></b></td>
                                        <td><?php echo $user->Email?></td>
                                        <?php foreach($order as $document){?>
                                            <?php foreach($document as $k => $v){?>
                                                <?php if ($k == "products"){?>
                                                    <td><?php foreach ($v as $product) { ?><div><?php echo $product->product_name?></div><?php } ?></td>   
                                                <?php } ?>
                                                <?php if ($k == "total"){?><td><?php echo $v?>&euro;</td><?php } ?>
                                                <?php if ($k == "status"){?><td><?php echo $v?></td><?php } ?>
                                                <?php if ($k == "order_number"){?>
                                                    <td>
                                                        #<?php echo $v?> <button><a href="cinephilia_admin_cancel_order.php?email=<?php echo $user->Email;?>&order_num=<?php echo $v;?>">CANCEL</a></button>
                                                    </td><?php } ?>
                                            <?php } ?>
                                        <?php } ?>
                                    </tr>
                                <?php $i++;} ?>
                            <?php } ?>
                        <?php } ?>
                    <?php  } ?>
                </table>
            <?php } ?>
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