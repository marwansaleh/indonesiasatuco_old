<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
    <div <?php echo count($adverts[ADV_TYPE_MOBILE_ARTICLE])>1? 'class="flexslider" style="margin-bottom:0;"':'';?> id="mobile-article-advert">
        <ul class="slides">
            <?php foreach ($adverts[ADV_TYPE_MOBILE_ARTICLE] as $adv): ?>
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

<?php if (count($adverts[ADV_TYPE_MOBILE_ARTICLE])>1): ?>
<script type="text/javascript">
    $(document).ready(function (){
        $('#mobile-article-advert').flexslider({
            animation: "slide",
            slideshow: true,
            controlNav: false,
            animationLoop: true,
            //itemWidth: 400,
            itemMargin: 0
        });
    });
</script>
<?php endif; 