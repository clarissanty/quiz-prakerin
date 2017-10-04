
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz Sun - Add Post</title>

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
<style>

    table {
            border-color:white;
            color:black;
            width:1170px;
            height:1000px;
            background: #fff;
            margin-bottom: 20px;
            padding: 5px 5px;
            background: #fff;
            background: rgba(255,255,255,0.9);

    }
    
    td {
        color:black;
    }
    tr {
        height : 20px;
    }

</style>
<body>
<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Quiz Sun</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php $baseUrl; ?>index.php">Home</a>
                    </li>
                    <li>
                        <!-- <a href="<?php $baseUrl; ?>about.php">About</a> -->
                        <a href="<?php $baseUrl; ?>about.php">About</a>
                    </li>
                    <li>
                        <a href="<?php $baseUrl; ?>index.php?page=auth&action=post">Post</a>
                    </li>
                    <li>
                        <a href="<?php $baseUrl; ?>index.php?page=auth&action=category">Category</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>   
    
    <div class="container">

        <div class="row">
            <div class="box">
            <center>
                <tr>
                    <td>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Quiz Sun Add Post</h1>
                    <hr class="tagline-divider">
                    </td>
                </tr>
            </center>
            </div>
        </div>
        <div class="row">
            <table>
                <tr>
                    <td>
                        <div class="col-lg-12">
                            <hr>
                            <h2 class="intro-text text-center">Post
                        
                            </h2>
                            <hr>
                        </div>
                       
                        <center>(Silakan isi tabel di bawah ini..)</center>
                    </td>
                    <tr>
                        <td>
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <form method="post" name="category" id="contactForm" >
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Title" name="title" id="Title" required data-validation-required-message="Please enter your title post.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div>
                                            <br/>
                                            <label>Content : </label>
                                            <br/>
                                            <textarea id="posting" name="posting" ></textarea>
                                                <script type="text/javascript">
                                                var editor = CKEDITOR.replace('posting');
                                                </script>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                    <br/>
                                        <label>Category :</label>
                                            <div class="input-field col s6">
                                                <?php 
                                                $dataSql = $connect->execute("select * from tbl_category");
                                                while ($row = $dataSql->fetch_object()) {
                                                echo '<select name="name_category" class="browser-default"';
                                                echo '<option>---Pilih Category---</option>';
                                                echo '<option value="' . $row['id_category'] . '">' . $row['name_category'] . '</option>';
                            
                                                echo '</select>';
                                                }
                                                ?>

                                            </div>
                                    </div>
                                    <div>
                                        <br/>
                                        <center>
                                        <button type="submit" name="btn_insertPost_auth">SIMPAN</button>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                </tr>
            </table>
        </div>
    </div>


<!-- Script JS -->
<script type="text/javascript">
    $('#content').trigger('autoresize');
</script>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
