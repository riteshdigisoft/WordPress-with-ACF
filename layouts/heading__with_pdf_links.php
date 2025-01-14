<?php 
  if (get_row_layout() == 'heading__with_pdf_links') :
?>  

<section class="bsky_resources <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_resources_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_resources_inner">  

            <div class="common_title text-center default_pb">
                <p class="default_caption_caps"><?php echo get_sub_field('sub_heading'); ?></p>
                <h1 class="heading_1"><?php echo get_sub_field('heading'); ?></h1>
            </div>

            <div class="resources_link">
               
                <div class="row gap-38">
                    
                    <div class="col-md-6">
                        <h2 class="heading_2"><?php echo get_sub_field('pdf_label'); ?></h2>
                        <div class="list_group">
                            <ul class="list_group_flush">
                            	<?php
                            	$pdf_left = get_sub_field('pdf_left');
                            	foreach ($pdf_left as $value) {
                            		if($value){
                            	?>
                                <li class="default_caption_title"><a href="<?php echo $value['pdf_link']; ?>" class="color_blue"><?php echo $value['pdf_label']; ?></a></li>
                            <?php } } ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <h2 class="heading_2"><?php echo get_sub_field('pdf_label'); ?></h2>
                        <div class="list_group">
                            <ul class="list_group_flush">
                            	<?php
                            	$pdf_right = get_sub_field('pdf_right');
                            	foreach ($pdf_right as $values) {
                            		if($value){
                            	?>
                                <li class="default_caption_title"><a href="<?php echo $values['pdf_link']; ?>" class="color_blue"><?php echo $values['pdf_label']; ?></a></li>
                            <?php }} ?>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
      </div>
    </div>
</section>

<?php endif ; ?>  