<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>I greet you .com</title>

    <!-- jQuery -->
    <script src="<?php echo base_url("assets/js/jquery-1.11.0.js"); ?>"></script>
    <!-- Slider css -->
    <link href="<?php echo base_url("assets/css/jquery.bxslider.css"); ?>" rel="stylesheet">
    <!-- Slider js -->
    <script src="<?php echo base_url("assets/js/jquery.bxslider.min.js"); ?>"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
                infiniteLoop: true,
                captions: true,
                pager: false
            });
        });
    </script>
</head>
<body>

<div class="container">
<?php $slides = get_slides(); ?>

<ul class="bxslider">
    <?php foreach($slides as $slide): ?>
        <li><img src="/uploads/<?php echo $slide->image ?>" title="<?php echo $slide->content1; ?>/<?php echo $slide->content2; ?>"" /></li>
    <?php endforeach; ?>
</ul>

</div>
</body>
</html>