<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/css/landing-page.css"); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/font-awesome-4.1.0/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Header -->
<div class="intro-header">
    <div class="container">
        <div class="container-fluid"></div>
        <div class="row">
            Your greeting will be available at url: http://<?php echo $subdomain ?>.igreetyou.com

            <div class="col-lg-12">

                <?php echo $error;?>

                <div class="add-slides">
                    <?php echo form_open_multipart('slides/do_upload');?>
                    <div class="slides">
                        <div class="slide">
                            <input type="file" name="userfile[]" size="20" />
                            <input type="text" name="caption[]" />
                            <input type="text" name="subcaption[]" />
                        </div>

                        <div class="slide">
                            <input type="file" name="userfile[]" size="20" />
                            <input type="text" name="caption[]" />
                            <input type="text" name="subcaption[]" />
                        </div>

                        <div class="slide">
                            <input type="file" name="userfile[]" size="20" />
                            <input type="text" name="caption[]" />
                            <input type="text" name="subcaption[]" />
                        </div>
                    </div>
                    <input type="button" value="Add another slide" />
                    <input type="submit" value="Publish" />
                    </form>
                </div>


                <form action="" method="post">
                    <input type="submit" name="delete" value="Return to previous page"/>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- jQuery Version 1.11.0 -->
<script src="<?php echo base_url("assets/js/jquery-1.11.0.js"); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>

</html>