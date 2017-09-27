 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz Sun - Post</title>

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
            border-color:black;
            color:black;

    }
    tr, td {
            text-align: center;
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
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Quiz Sun Post</h1>
                    <hr class="tagline-divider">
                    
            </center>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <div>
                    <a href="<?php $baseUrl; ?>index.php?page=auth&action=add-post" class="btn btn-default">Add Post</a>
                </div>
                    <hr>
                    <h2 class="intro-text text-center">Post
                        
                    </h2>
                    <hr>
                </div>

    <div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey darken-1">
                <div class="card-title center white-text">
                   
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
                <form>
                    <table align="center" border="1" width="900px">
                        <thead>
                            <tr>
                                <th><center>Title</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                    <td><?php echo $r_tampil['title_post']; ?></td>
                                    <td width="150px">
                                        <a href="edit-post.php?id_post=<?php echo $r_tampil['id_post']; ?>" class="btn btn-info btn-sm">Edit<i class="fa fa-pencil"></i></a>
                                        <a href="delete-post.php?id_post=<?php echo $r_tampil['id_post']; ?>" class="btn btn-danger btn-sm">Delete<i class="fa fa-trash"></i></a>
                                    </td>
                            </tr>
                                
                        </tbody>
        
                    </table>
                </form>
            </div>
        </div>
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
