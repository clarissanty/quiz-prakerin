<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz Sun - Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    
                </button>
                <a class="navbar-brand" href="index.php"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    

    <!-- Main Content -->
    <div class="container">
        <div class="row" >
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
            <center>
            <br></br>
            <br></br>
                <p><h1>SELAMAT DATANG</h1></p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <div class="card-title center white-text">
                    <h4>Login</h4>
                    <?php 
                        if (isset($error)) {
                            foreach ($error as $error) {
                                ?>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="chip red darken-1 white-text">
                                            <?php echo $error; ?>
                                            <i class="close mdi mdi-close white-text"></i>
                                         </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                     ?>
                </div>
                <br>
                </br>
                <form name="login" id="contactForm" method="post" class="warna">
                    <div class="row control-group">
                    <br>
                        
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="text" name="username" placeholder="Username" class="form-control" required data-validation-required-message="Please enter your username.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="password" autocomplete="off" name="password" placeholder="Password" class="form-control" required data-validation-required-message="Please enter your password.">
                        </div>

                    </div>
                   
                     <div>
                     
                           <button type="submit" name="btn_login_auth" >Save</button>

                    </div>
                
                </form>
                <br>
                    <form action="<?php $baseUrl; ?>index.php?page=auth&action=register" method="post">
                    <div align="center" class="col-xs-10">
                    <br>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Make a New Account</button>

                    </div>  
                    </form>
            </div>
        </div>
    </div>
    <br></br>
    <br>
     <div class="col-lg-12 text-center">
        <ul class="pager">
            <li class="previous"><a href="home.php">&larr; Back</a>
            </li>
           
        </ul>
    </div>
    <hr>

    <!-- Footer -->
    <footer>
       
    </footer>



    <!-- jQuery -->


    <script src="<?php $baseUrl; ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $baseUrl; ?>js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->

    <script type="text/javascript" src="util-functions.js"></script>
    <script type="text/javascript" src="clear-default-text.js"></script>
    


</body>

</html>



 