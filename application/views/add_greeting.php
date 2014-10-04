<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

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
    <script>
        $(function() {

            $("#tabs" ).tabs({
                activate:function(event,ui){
                    if(ui.newTab.index()==1 && !App.status.init ){
                        App.init();
                    } else {
                        App.stop();
                    }
                }
            });

        });
    </script>
</head>
<body>
<!-- Header -->
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>IGreetYou.com</h1>
                    <hr class="intro-divider">
                    <h2>Add slides</h2>
                    <div class="add-slide">
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1">From Computer</a></li>
                                <li><a href="#tabs-2">From Camera</a></li>
                                <li><a href="#tabs-3">Online Gallery</a></li>
                            </ul>
                            <div id="tabs-1">
                                <input type="file">
                            </div>
                            <div id="tabs-2">
                                <section>
                                    <div class="row">
                                        <div class="span12">
                                            <div class="row">
                                                <div class="span4">
                                                    <h3>Preview</h3>
                                                    <div id="webcam">
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <canvas id="canvas"></canvas>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p id="errorMessage"></p>
                                            </div>
                                            <div class="row">
                                                <div class="span4">&nbsp;</div>
                                                <div class="span4"><button class="btn btn-primary btn-large" id="takeSnapshot">Take a picture</button></div>
                                                <div class="span4">&nbsp;</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div id="tabs-3">
                                online gallery
                            </div><br>
                            <caption>Caption</caption><input type ="text"><br>
                            <caption>Sub Caption</caption><input type ="text">
                        </div>

                    </div>
                    <div class="next"><input type="button" class="btn btn-primary" value="Publish"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<script src="<?php echo base_url("assets/js/getUserMedia.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/demo.js"); ?>"></script>

</body>

</html>