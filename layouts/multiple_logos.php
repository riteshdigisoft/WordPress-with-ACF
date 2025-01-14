<?php 
if (get_row_layout() == 'multiple_logos') : 
?>
<section class="bsky_sponsor <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_sponsor_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_sponsor_inner">
                <p class="default_caption_title"><?php echo get_sub_field('title'); ?></p>
                <div class="row align-items-center">
                    <div class="sponsor_list">
                        <?php 
                        $logos = get_sub_field("logos");
                        foreach ($logos as $value) {
                        ?>
                        <div class="sponsor_img">
                            <img src="<?php echo $value['logo_image']; ?>" alt="" srcset="">
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>