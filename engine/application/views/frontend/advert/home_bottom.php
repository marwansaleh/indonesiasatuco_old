<?php if ($adverts && isset($adverts[ADV_TYPE_BOTTOM_LEFT])): ?>

<?php if (count($adverts[ADV_TYPE_BOTTOM_LEFT])>1): ?>
<div class="row" style="margin-top:5px;">
    <div class="col-sm-12  <?php echo count($adverts[ADV_TYPE_BOTTOM_LEFT])>1?'flexslider':''; ?>" style="margin-bottom:5px;" id="advert-home-bottom-desktop">
        <ul class="slides">
            <?php foreach ($adverts[ADV_TYPE_BOTTOM_LEFT] as $adv): ?>
            <li>
                <?php if ($adv->link_url && $adv->link_url != '#'): ?>
                <a href="<?php echo site_url('click/run/'.$adv->id.'/'.  urlencode(base64_encode($adv->link_url))); ?>" <?php echo $adv->new_window==1?'target="blank"':''; ?>>
                    <img class="img-responsive" src="<?php echo $adv->file_name; ?>">
                </a>
                <?php else: ?>
                <img class="img-responsive" src="<?php echo $adv->file_name; ?>">
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
</div>
<script type="text/javascript">
    $(document).ready(function (){
        $('#advert-home-bottom-desktop').flexslider({
            animation: "slide",
            slideshow: true,
            controlNav: false,
            animationLoop: true,
            //itemWidth: 400,
            itemMargin: 0
        });
    });
</script>

<?php else: ?>
<div class="row" style="margin-top:5px;">
    <?php foreach ($adverts[ADV_TYPE_BOTTOM_LEFT] as $adv): ?>
    <div class="col-sm-12" style="margin-bottom:5px;">
        <?php if ($adv->link_url && $adv->link_url != '#'): ?>
        <a href="<?php echo site_url('click/run/'.$adv->id.'/'.  urlencode(base64_encode($adv->link_url))); ?>" <?php echo $adv->new_window==1?'target="blank"':''; ?>>
            <img class="img-responsive" src="<?php echo $adv->file_name; ?>">
        </a>
        <?php else: ?>
        <img class="img-responsive" src="<?php echo $adv->file_name; ?>">
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<?php endif;