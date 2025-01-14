<?php
if (get_row_layout() == 'choose_industry') : ?>
    <section class="bsky_clickable_card <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_clickable_card_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_clickable_card_inner">
                    <?php if(get_sub_field('heading')){ ?>
                    <div class="center_title default_pb">
                        <h2 class="heading_2"><?php echo get_sub_field('heading'); ?></h2>
                    </div>
                <?php } ?>
                    <div class="row <?php echo get_sub_field('row_class'); ?>"> 
                        <?php
                        $column = get_sub_field('column');
                            $i = 1;
                            foreach ($column as $value) {
                                ?>
                                <div class="col-md-4">
                                    <div class="clickable_card">
                                        <div class="clickable_card_inner">
                                            <img src="<?php echo esc_url($value['icon']); ?>" alt="Card Icon" class="card_icon">
                                            <h3 class="heading_3"><?php echo esc_html($value['heading']); ?></h3>
                                            <p class="default_body color_dark_blue"><?php echo esc_html($value['text']); ?></p>
                                        </div>
                                        <a href="<?php echo esc_url($value['button_link']); ?>" class="stretched-link learn_more">
                                            <?php echo esc_html($value['button_text']); ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                if ($i == 8) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="clickable_card blue_bg">
                                            <div class="clickable_card_inner">
                                                <img src="<?php echo esc_url(get_sub_field('icon')); ?>" alt="Special Icon" class="card_icon">
                                            </div>
                                            <div class="blue_bg_btn">
                                                <a href="<?php echo esc_url(get_sub_field('button_link')); ?>" class="get_btn">
                                                    <?php echo esc_html(get_sub_field('button_text')); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $i++;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
