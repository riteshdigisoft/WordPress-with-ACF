<?php
if (get_row_layout() == 'bottom_menu') : 
?>
<section class="bsky_filter <?php if(is_front_page()){ ?>mb-39<?php } ?> d-md-block d-none">
	<div class="bsky_filter_outter">
		<div class="bsky_overall_wrapper">
			<div class="bsky_filter_inner">
				<div class="row align-items-center">
					<div class="col-md">
						<div class="bsky_filter-list">
							<ul>
								<?php 
								$bottom_header = get_sub_field('bottom_header');
								foreach( $bottom_header as $value ){
									$subitem = $value['sub_link'];
									?>
									<li class="default_body_small <?php	if($subitem){?>hover_li<?php } ?>">
										<a href="<?php echo $value['link'];?>"><?php echo $value['text'];?>
										<?php
										if($subitem){
											?>
											<svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
												<path d="M1 1.25952L5.25958 5.5191L9.51917 1.25952" stroke="#0A1A2F"/>
											</svg>
										<?php } ?>
									</a>
									<div class="menu_mega_outter">
										<div class="menu_mega">
											<div class="row">
												<div class="col-md-4">
													<p class="default_body_small menu_title"><?php echo get_sub_field('service_title'); ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													<div class="row">
														<?php
														if($subitem){
														?>
														<div class="col-md-4">
														<ul class="mega_menu_list">
														<?php
														$i = 1;
														foreach( $subitem as $subvalue ){
															if($i<=4){
															?>
														<li>
															<a href="<?php echo $subvalue['link']; ?>" class="default_body_small">
																<?php echo $subvalue['text']; ?>
															</a>
														</li>
														<?php
														}
														$i++;
														}
														?>
														</ul>
														</div>
														<div class="col-md-4">
															<ul class="mega_menu_list">
															<?php
															$i = 1;
															foreach( $subitem as $subvalue ){
															if($i>4 && $i<=8){
															?>
															<li>
															<a href="<?php echo $subvalue['link']; ?>" class="default_body_small">
																<?php echo $subvalue['text']; ?>
															</a>
															</li>
															<?php
															}
															
															$i++;
															}
															?>
															</ul>
														</div>
														<div class="col-md-4">
															<ul class="mega_menu_list">
															<?php
															$i = 1;
															foreach( $subitem as $subvalue ){
															if($i>8 && $i<=12){
															?>
															<li>
																<a href="<?php echo $subvalue['link']; ?>" class="default_body_small">
																	<?php echo $subvalue['text']; ?>
																</a>
															</li>
															<?php
															}
															$i++;
															}
															?>
															</ul>
														</div>
														<?php
														}
														?>
													</div>
												</div>
												<div class="col-md-auto">
													<div class="menu_mega_address">
														<p class="default_body"><?php echo get_sub_field('heading'); ?></p>
														<p class="default_body_small"><?php echo get_sub_field('sub_heading'); ?></p>
														<div class="orange_btn">
															<a href="<?php echo get_sub_field('btn_link'); ?>" class="get_btn"><?php echo get_sub_field('btn_text', 'option'); ?></a>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</li>
							<?php } ?>
						</ul>

					</div>
				</div>
				<div class="col-md-auto">
					<div class="orange_btn">
						<a href="<?php echo get_sub_field('header_button_link'); ?>" class="get_btn"><?php echo get_sub_field('header_button'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php endif; ?>
