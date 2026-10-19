<?php 
    include 'cinephilia_db_connection.php';
    
    session_start();
    $cursor = $collection_users->find(array('Name'=>array('$ne'=>'admin')));
    $counter = 0;
    foreach ($cursor as $document){
        $counter++;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinephilia - Admin Users</title>
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

            section{
                margin-top: 30px;
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
            Cinephilia Admin Users Page
        </header>
        <div class="navigation d-flex justify-content-center">
            <a href="cinephilia_admin_home.php" target="_self">Home</a>
            <a href="cinephilia_admin_users.php" target="_self">Users</a>
            <a href="cinephilia_admin_products.php" target="_self">Products</a>
            <a href="cinephilia_admin_orders.php" target="_self">Orders</a>
            <a href="cinephilia_logout.php">Logout</a>
        </div>
        <div class="container">
            <p style="font-size: 20px; text-align:center;" >Total Number of Users: <?php echo $counter?></p>
            <section class="col-lg-4">
                <h3>Add user info</h3>
                <form method="POST" action="cinephilia_admin_add_user_info.php"> 
                    <label for="email">User's Email<span class="required"> *</span></label>
                    <input type="text" id="email" name="email" required="required" placeholder="Enter user's email address">
                    
                    <label for="field_name">Field Name<span class="required"> *</span></label>
                    <input type="text" id="field_name" name="field_name" required="required" placeholder="Enter new field's name">

                    <label for="field_value">Field Value<span class="required"> *</span></label>
                    <input type="text" id="field_value" name="field_value" required="required" placeholder="Enter new field's value">

                    <button class="form-button" type="submit">Submit</button>
                    <p><span class="required">*</span>Required field</p>
                </form>
            </section>
            <section class="col-lg-4">
                <h3>Update user's info</h3>
                <form method="POST" action="cinephilia_admin_update_user_info.php"> 
                    <label for="email">User's email<span class="required"> *</span></label>
                    <input type="text" id="email" name="email" required="required" placeholder="Enter user's email address">

                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter new name (full)">
                    
                    <label for="new_email">Email</label>
                    <input type="text" id="new_email" name="new_email" placeholder="Enter new email address">
                        
                    <label for="pass">Password</label>
                    <input type="text" id="pass" name="pass" placeholder="Enter new password">
                        
                    <button class="form-button" type="submit">Submit</button>
                    <p><span class="required">*</span>Required field</p>
                </form>
            </section>
            <section class="col-lg-4">
                <h3>Delete user</h3>
                <form method="POST" action="cinephilia_admin_delete_user.php"> 
                    <label for="email">User's email<span class="required"> *</span></label>
                    <input type="text" id="email" name="email" required="required" placeholder="Enter user's email address">                   
                    
                    <button class="form-button" type="submit">Submit</button>
                    <p><span class="required">*</span>Required field</p>
                </form>
            </section>
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