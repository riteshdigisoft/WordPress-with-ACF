<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_icon_list') : 
 
    $heading = get_sub_field('heading'); 
?>  

<section class="bsky_zig_zag default_py">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
                <h3 class="heading_3 default_pb "><?php echo $heading;?></h3>
               <div class="row ">
                    <div class="col-md-3">
                      <?php if (have_rows('icon_column')): ?>
							 <ul class="list_style">
							<?php while (have_rows('icon_column')): the_row(); ?>
								<?php 
									$link_icon = get_sub_field('link_icon'); 
									$link_txt = get_sub_field('link_txt'); 
									$link = get_sub_field('link'); ?>
												<li>
													<span><img src="<?php echo $link_icon; ?>" alt="" srcset=""></span><a href="<?php echo $link; ?>" class="list_anchor"><?php echo$link_txt; ?></a>
												</li>
							<?php endwhile; ?>
						   </ul>
					<?php else: ?>
						<p>No columns found.</p>
					<?php endif; ?>
							
                          
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>