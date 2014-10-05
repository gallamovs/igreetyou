<script type="text/javascript">
    $.noConflict();

    $(document).ready(function(){
        $('.bxslider').bxSlider({
            auto: true,
            infiniteLoop: true,
            captions: true,
            pager: false
        });
    });
</script>

<div class="container">
    <?php $slides = get_slides(); ?>
    <ul class="bxslider">
        <?php foreach($slides as $slide): ?>
            <li><img src="/uploads/<?php echo $slide->image ?>" title="<?php echo $slide->content1; ?>/<?php echo $slide->content2; ?>"" /></li>
        <?php endforeach; ?>
    </ul>
</div>