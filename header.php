<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/slick-slider/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/slick-slider/slick/slick-theme.css">
	<!-- <link rel="stylesheet" href="/assets/fonts/TT-Norms/stylesheet.css"> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/TT-Norms/stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main-style.css?v=<?php echo filemtime(get_template_directory(). '/assets/css/main-style.css'); ?>">
	<?php 
	$file_path = get_template_directory() . '/assets/css/responisve.css';
	if (file_exists($file_path)) {
    $version = filemtime($file_path); // Get the last modified time
} else {
    $version = '1.0'; // Default version as a fallback
}
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responisve.css?v=<?php echo $version; ?>">
<?php wp_head(); ?>  
</head>
<body <?php body_class(sanitize_html_class( get_post_field( 'post_name', get_post()))); ?>>
	<div class="bsky_main_wrapper">
		<header class="bsky_header">
			<div class="bsky_header_top_outer">
				<div class="bsky_overall_wrapper">
					<div class="bsky_header_top_inner"> 
						<div class="row align-items-center">
							<div class="col-md-auto">
								<div class="top_header_left_links">
									<p>
										<?php $Residential = get_field('top_navbar_text', 'option'); ?> 
										<?php $learn_more_link = get_field('learn_more_link', 'option'); ?>
										<?php echo $Residential; ?> <a href="<?php echo $learn_more_link;?>"> Learn more</a>
									</p>
								</div>
							</div>
							<div class="col-md">
								<ul class="top_header_links top_header_right_links">
									<?php 
						  // Retrieve the 'top_menus' field from the options page
									$top_menus = get_field('top_menus', 'option');
									?>

									<?php if ($top_menus) : ?> 
										<?php foreach ($top_menus as $menu) : ?>
											<?php
							  $top_menu_name = $menu['top_menu_name']; // Get the top menu name
							  $top_menu_link = $menu['top_menu_link']; // Get the top menu link
							  $submenu = $menu['top_sub_menus']; // Get the submenu items (repeater field)
							  ?>

							  <?php if ($top_menu_name === 'Blog') : ?>
							  	<!-- Handle Blog as a normal menu item without a dropdown -->
							  	<li>
							  		<a class="default_body_small" href="<?php echo esc_url($top_menu_link); ?>">
							  			<?php echo esc_html($top_menu_name); ?>
							  		</a> 
							  	</li>
							  <?php else : ?>
							  	<!-- Dropdown for other menus -->
							  	<li class="nav-item dropdown">
							  		<a class="nav-link dropdown-toggle dropdown_arrow default_body_small" href="<?php echo esc_url($top_menu_link); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							  			<?php echo esc_html($top_menu_name); ?>
							  		</a>

							  		<ul class="dropdown-menu">
							  			<?php if ($submenu) : ?>
							  				<?php foreach ($submenu as $item) : ?>
							  					<li><a class="dropdown-item default_body_small text-white" href="<?php echo esc_url($item['top_submenu_link']); ?>">
							  						<?php echo esc_html($item['top_submenu_name']); ?>
							  					</a></li>
							  				<?php endforeach; ?>
							  			<?php endif; ?>
							  		</ul>
							  	</li>
							  <?php endif; ?>

							<?php endforeach; ?>
						<?php else : ?>
							<p>No top menus found.</p>
						<?php endif; ?>




						<?php $contact_no = get_field('contact_no', 'option'); ?> 
						<li><a href="tel:<?php echo $contact_no; ?>" class="tel default_caption_caps"><?php echo $contact_no; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="header_nav" class="bsky_header_bottom_outer">
	<div class="bsky_overall_wrapper">
		<div class="bsky_header_bottom_inner">
			<nav class="navbar navbar-expand-md">
				<div class="bsky_nav_links bsky_left_nav_links " id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-end d-none d-md-flex">
						<?php if (have_rows('main_menu_left', 'option')) : ?>
							<?php 
								$is_first_item = true; // Track if it's the first menu item
								?>
								<?php while (have_rows('main_menu_left', 'option')) : the_row(); ?>
									<?php 
									$label = get_sub_field('menu_text');
									$url = get_sub_field('menu_link');
									?>
									<li class="nav-item">
										<a class="nav-link 
										<?php //echo $is_first_item ? 'active' : ''; ?> default_body_large" 
										aria-current="page" href="<?php echo esc_url($url); ?>">
										<?php echo esc_html($label); ?>
									</a>
								</li>
								<?php $is_first_item = false; // After the first item, this becomes false ?>
							<?php endwhile; ?>
						<?php endif; ?> 
					</ul>


				</div>
				<div class="logo_div">
					<?php $logo_image = get_field('logo_image', 'option'); ?>
					<a href="/"> 
						<img src="<?php echo $logo_image; ?>" class="desktop_logo" alt="">
						<img src="<?php echo $logo_image; ?>" class="mobile_logo d-none" alt=""></a>
					</div>




					<div class="bsky_nav_links bsky_right_nav_links" id="navbarSupportedContent">
						<ul class="navbar-nav justify-content-start d-none d-md-flex">

							<?php 
					  // Retrieve the 'main_menu_right' field from the options page
					  $main_menu_right = get_field('main_menu_right', 'option'); // 'option' refers to the Options page
					  ?>

					  <?php if ($main_menu_right) : ?>
					  	<?php foreach ($main_menu_right as $key => $menu) : ?>
					  		<?php
						  $top_menu_name = $menu['menu_text']; // Get the top menu name
						  $top_menu_link = $menu['menu_link']; // Get the top menu link
						  $submenu = $menu['sub_menus']; // Get the submenu items (repeater field)
						  ?>

						  <?php if ($submenu && count($submenu) > 0) : ?>
						  	<!-- If submenu exists, render it as a dropdown -->
						  	<li class="nav-item dropdown <?php if($submenu){ echo "hover_li"; } echo" $top_menu_name";?>">
						  		<a class="nav-link dropdown-toggle dropdown_arrow dark_arrow default_body_small" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  			<?php echo esc_html($top_menu_name); ?>
						  		</a>
						  		<div class="menu_mega_outter">
						  			<div class="menu_mega">
						  				<div class="row">
						  					<div class="col-md">
						  						<div class="row">
						  							<?php
						  							if($submenu){
						  								?>
						  								<div class="col-md-4">
						  									<ul class="mega_menu_list">
						  										<?php
						  										$i = 1;
						  										foreach($submenu as $item){
						  											if($i<=4){
						  												?>
						  												<li><a class="dropdown-item default_body_small" href="<?php echo esc_url($item['submenu_link']); ?>">
						  													<?php echo esc_html($item['submenu_title']); ?>
						  												</a></li>
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
						  										foreach($submenu as $item){
						  											if($i>4 && $i<=8){
						  												?>
						  												<li><a class="dropdown-item default_body_small" href="<?php echo esc_url($item['submenu_link']); ?>">
						  													<?php echo esc_html($item['submenu_title']); ?>
						  												</a></li>
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
						  										foreach($submenu as $item){
						  											if($i>8 && $i<=12){
						  												?>
						  												<li><a class="dropdown-item default_body_small" href="<?php echo esc_url($item['submenu_link']); ?>">
						  													<?php echo esc_html($item['submenu_title']); ?>
						  												</a></li>
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
						  							<p class="default_body"><?php echo get_field('heading', 'option'); ?></p>
						  							<p class="default_body_small"><?php echo get_field('sub_heading', 'option'); ?></p>
						  							<div class="orange_btn">
						  								<a href="<?php echo get_field('btn_link', 'option'); ?>" class="get_btn"><?php echo get_field('btn_text', 'option'); ?></a>
						  							</div>
						  						</div>
						  					</div>
						  				</div>

						  			</div>
						  		</div>
						  	</li>
						  <?php else : ?>
						  	<!-- If no submenu, render it as a normal link -->
						  	<li class="nav-item">
						  		<a class="nav-link default_body_small" href="<?php echo esc_url($top_menu_link); ?>">
						  			<?php echo esc_html($top_menu_name); ?>
						  		</a>
						  	</li>
						  <?php endif; ?>

						<?php endforeach; ?>
					<?php else : ?>
						<p>No menu items found.</p> <!-- This will show if 'main_menu_right' is empty -->
					<?php endif; ?>


				</ul>
			</div>


			<div class="mobile_btn align-items-center d-inline-flex d-md-none">
				<a class="nav-link free_quote_btn" href="<?php echo get_field('header_button_link_commercial', 'option'); ?>"><?php echo get_field('header_button_commercial', 'option'); ?></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
					<span class="navbar-toggler-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17" fill="none">
							<path d="M0 0.892578H22" stroke="#0B3A7C" class="bar1"/>
							<path d="M0 8.22583H22" stroke="#0B3A7C" class="bar2"/>
							<path d="M0 15.5593H22" stroke="#0B3A7C" class="bar3"/>
						</svg>
					</span>
					
				</button> 
			</div>
			
		</nav>


		 <!-- new menu strat -->
		 <div class="menu_shutter">
	        <div class="top-menu mobile-menu">
	            <div class="accordion" id="accordionExamplemobile">
	            	<?php 
					$top_menu = get_field('top_menu', 'option');
					foreach ($top_menu as $key => $value) {
					?>
	                <div class="accordion-item border-0">
	                    <h2 class="accordion-header" id="heading_<?php echo $key; ?>">
	                        <a href="#" class="nav-link active default_body_large" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $key; ?>"><?php echo $value['menu_title']; ?></a> 
	                    </h2>
	                    <div id="collapse_<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?php echo $key; ?>" data-bs-parent="#accordionExamplemobile">
	                        <div class="accordion-body p-0">
	                            <div class="accordion" id="sub-accordionExamplemobile">
	                            	<?php
									$sub_menu = $value['sub_menu'];
									foreach ($sub_menu as $sub_key => $value) {
										$sub_menu_inner = $value['sub_menu_inner'];
										if($sub_menu_inner){
									?>
	                                <div class="accordion-item border-0">
	                                    <h2 class="accordion-header" id="sub-heading_<?php echo $sub_key; ?>">
	                                        <a href="javascript:void(0)" class="accordion-inner" type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapse_<?php echo $sub_key; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $key; ?>">
	                                            <?php echo $value['menu_title']; ?>
	                                        </a>
	                                    </h2>
	                                    <div id="sub-collapse_<?php echo $sub_key; ?>" class="accordion-collapse collapse" aria-labelledby="sub-heading_<?php echo $sub_key; ?>" data-bs-parent="#sub-accordionExamplemobile">
	                                        <div class="nav_dropdown_toggle">
	                                            <ul>
	                                            	<?php 
													foreach ($sub_menu_inner as $key => $value) {
													?>
	                                                <li>
	                                                    <a class="item" href="<?php echo $value['menu_link']; ?>"><?php echo $value['menu_title']; ?></a>
	                                                </li>
													<?php }?>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            	<?php }else{ ?>
	                                <a href="<?php echo $value['menu_link']; ?>" class="item accordion-inner" >
	                                    <?php echo $value['menu_title']; ?>
	                                </a>
	                            <?php }} ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				<?php } ?>
	               
	            </div>
	        </div>
	      
	        <hr>

	        <div class="bottom_menu mobile-menu">
					<div class="accordion" id="sub-accordion2">
						<?php 
						$bottom_menu = get_field('bottom_menu', 'option');
						foreach ($bottom_menu as $key => $value) {
							$sub_menu = $value['sub_menu'];
							if($sub_menu){
								?>
						<div class="accordion-item border-0">
							<h2 class="accordion-header" id="btm_sub-heading_<?php echo $key; ?>">
								<a href="javascript:void(0)" class="accordion-inner" type="button" data-bs-toggle="collapse" data-bs-target="#btm_sub-collapse_<?php echo $key; ?>" aria-expanded="true" aria-controls="btm_sub-collapse_<?php echo $key; ?>">
									<?php echo $value['menu_title']; ?>
								</a>
							</h2>
							<div id="btm_sub-collapse_<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="btm_sub-heading_<?php echo $key; ?>" data-bs-parent="#sub-accordion2">
								<div class="nav_dropdown_toggle">
									<ul>
										<?php 
										foreach ($sub_menu as $key => $value) {
										?>
										<li>
											<a class="item" href="<?php echo $value['menu_link']; ?>"><?php echo $value['menu_title']; ?></a>
										</li>
										<?php 
										}
										?>
									</ul>
								</div>
							</div>
						</div>
						<?php
						}
						else{
						?>
						<a href="<?php echo $value['menu_link']; ?>" class="item accordion-inner" ><?php echo $value['menu_title']; ?>
	                                    </a>
						<?php } 
					} ?>
					</div>
	        </div>
	    </div>
					<!-- new menu close -->

</div>
</div>
</header>
</div>


<?php 
$url = $_SERVER['REQUEST_URI'];
if (strpos($url, 'commercial') !== false) {
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
									$bottom_header = get_field('bottom_header_commercial', 'option');
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
														<p class="default_body_small menu_title"><?php echo get_field('label_commercial','option'); ?></p>
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
															<p class="default_body"><?php echo get_field('heading_commercial', 'option'); ?></p>
															<p class="default_body_small"><?php echo get_field('sub_heading_commercial', 'option'); ?></p>
															<div class="orange_btn">
																<a href="<?php echo get_field('btn_link_commercial_commercial', 'option'); ?>" class="get_btn"><?php echo get_field('btn_text_commercial', 'option'); ?></a>
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
							<a href="<?php echo get_field('header_button_link_commercial', 'option'); ?>" class="get_btn"><?php echo get_field('header_button_commercial', 'option'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
}
else{
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
									$bottom_header = get_field('bottom_header', 'option');
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
														<p class="default_body_small menu_title"><?php echo get_field('label','option'); ?></p>
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
															<p class="default_body"><?php echo get_field('heading', 'option'); ?></p>
															<p class="default_body_small"><?php echo get_field('sub_heading', 'option'); ?></p>
															<div class="orange_btn">
																<a href="<?php echo get_field('btn_link', 'option'); ?>" class="get_btn"><?php echo get_field('btn_text', 'option'); ?></a>
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
							<a href="<?php echo get_field('header_button_link', 'option'); ?>" class="get_btn"><?php echo get_field('header_button', 'option'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
}
?>