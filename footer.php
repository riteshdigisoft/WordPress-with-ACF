    <footer class="main_footer">
        <div class="bsky_footer_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_footer_inner">
                    <div class="row g-0" >
                        <div class="col-auto">
                            <div class="footer_column first_column">
							<?php $footer_logo_image = get_field('footer_logo', 'option'); ?> 
                                <a href="/"><img src="<?php echo $footer_logo_image; ?> " alt="" srcset=""></a>
                                <div class="footer_column_box">
                                    <div class="footer_column_title default_caption_super_small">
                                        <p>Phoenix office</p>
                                    </div>
									<?php $phoenix_office = get_field('phoenix_office_address', 'option'); ?> 
                                    <p class="default_caption_title"><?php echo $phoenix_office ;?></p>
                                </div>
                                <div class="footer_column_box">
                                    <div class="footer_column_title default_caption_super_small">
                                        <p>Gilbert office</p>
                                    </div>
									<?php $gilbert_office = get_field('gilbert_office_address', 'option'); ?> 
                                    <p class="default_caption_title"><?php echo $gilbert_office ;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="footer_column sec_column">
                                <div class="sec_column_inner">
                                    <div class="footer_column_box">
                                        <div class="footer_column_title default_caption_super_small">
                                            <p>call 24/7</p>
                                        </div>
										<?php $footer_contact_number = get_field('footer_contact_number', 'option'); ?> 
                                       <a href="tel:<?php echo $footer_contact_number; ?>">  <p class="footer_big_text"><?php echo $footer_contact_number; ?></p> </a>
                                    </div>
                                    <div class="footer_column_box">
                                        <div class="footer_column_title default_caption_super_small">
                                            <p>Trusted for 20+ years</p>
                                        </div>
										
										
										<?php 
										  // Retrieve the 'trusted_partner_logos' repeater field from the options page
										  $trusted_partner_logos = get_field('trusted_partner_logos', 'option'); // 'option' refers to the Options page
										  
										?> 

										<?php if ($trusted_partner_logos) : ?>
										  <ul>
											<?php foreach ($trusted_partner_logos as $logo) : ?>
											  <?php 
												$logo_image = $logo['trusted_logos']; // Get the logo image
											  ?>
											  <li>
												<img src="<?php echo $logo_image; ?>" alt="<?php echo $logo_image; ?>" />
											  </li>
											<?php endforeach; ?>
										  </ul>
										<?php else : ?>
										  <p>No footer logos found.</p> <!-- This will show if the 'trusted_partner_logos' repeater field is empty -->
										<?php endif; ?> 


										
										
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-auto">
                            <div class="footer_column third_column">
                                <div class="sec_column_inner">
                                    <div class="footer_column_box">
                                        <div class="footer_column_title default_caption_super_small">
                                            <p>EmaiL</p>
                                        </div>
										<?php $email_address = get_field('email_address', 'option'); ?> 
                                        <p class="footer_big_text"><?php echo $email_address; ?> </p>
                                    </div>
                                    
                                    <div class="footer_column_box">
                                        <div class="footer_column_title default_caption_super_small">
                                            <p>Social</p>
                                        </div>
										
										<?php 
							  // Retrieve the 'social_icons' repeater field from the options page
							  $social_icons = get_field('social_icons', 'option'); // 'option' refers to the Options page

							?>

							<?php if ($social_icons) : ?>
							  <ul>
								<?php foreach ($social_icons as $social_icon) : ?>
								  <?php 
									$icon_image = $social_icon['icon']; // Get the social media icon image (assumed to be an image field)
									$icon_link = $social_icon['social_link']; // Get the optional link for the icon
								  ?>
								  <li>
									<?php if ($icon_link) : ?>
									  <a href="<?php echo $icon_link; ?>" target="_blank" rel="noopener noreferrer">
										<img src="<?php echo $icon_image; ?>" alt="<?php echo $icon_image; ?>" />
									  </a>
									<?php else : ?>
									  <img src="<?php echo $icon_image; ?>" alt="<?php echo $icon_image; ?>" />
									<?php endif; ?>
								  </li>
								<?php endforeach; ?>
							  </ul>
							<?php else : ?>
							  <p>No social icons found.</p> <!-- This will show if the 'social_icons' repeater field is empty -->
							<?php endif; ?>
 
                                    </div>   
                                </div>
                            </div>
                        </div>
    
                        <div class="col-auto">
                            <div class="footer_column forth_column">
                                <div class="sec_column_inner">
                                    <div class="footer_column_box">
                                        
                                        <div class="list_one">
                                            <div class="footer_column_title default_caption_super_small">
                                                <p>Quick links</p>
                                            </div>
											
											
   
													<?php 
													  // Retrieve the 'quick_links_menu' repeater field from the options page
													  $quick_links_menus = get_field('quick_links_menu', 'option'); // 'option' refers to the Options page
													?>

													<?php if ($quick_links_menus) : ?>
													  <ul class="list_one_ul">
														<?php foreach ($quick_links_menus as $quick_links_menu) : ?>
														  <?php 
															$menu_text = $quick_links_menu['menu_text']; // Get the menu text
															$menu_link = $quick_links_menu['menu_link']; // Get the optional link for the menu item
														  ?>
														  <li>
															<?php if ($menu_link) : ?>
															  <a href="<?php echo esc_url($menu_link); ?>">
																<?php echo esc_html($menu_text); ?>
															  </a>
															<?php else : ?>
															  <?php echo esc_html($menu_text); ?>
															<?php endif; ?>
														  </li>
														<?php endforeach; ?>
													  </ul>
													<?php else : ?>
													  <p>No quick links found.</p> <!-- This will show if the 'quick_links_menu' repeater field is empty -->
													<?php endif; ?>
 
											
                                        </div>
                                        <div class="list_one">
                                            <div class="footer_column_title default_caption_super_small">
                                                <p>Quick links</p>
                                            </div>
								
										<?php 
									  // Retrieve the 'services_menu' repeater field from the options page
									  $services_menu = get_field('services_menu', 'option'); // 'option' refers to the Options page
									?>

									<?php if ($services_menu) : ?>
									  <ul class="list_one_ul">
										<?php foreach ($services_menu as $service) : ?>
										  <?php 
											$menu_text = $service['menu_text']; // Get the menu text
											$menu_link = $service['menu_link']; // Get the optional link for the menu item
										  ?> 
										  <li>
											<?php if ($menu_link) : ?>
											  <a href="<?php echo esc_url($menu_link); ?>">
												<?php echo esc_html($menu_text); ?>
											  </a>
											<?php else : ?>
											  <?php echo esc_html($menu_text); ?>
											<?php endif; ?>
										  </li>
										<?php endforeach; ?>
									  </ul>
									<?php else : ?>
									  <p>No services menu found.</p> <!-- This will show if the 'services_menu' repeater field is empty -->
									<?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="sub_footer_links">
                           
                               
								<?php 
									  // Retrieve the 'services_menu' repeater field from the options page
									  $bottom_menus = get_field('bottom_menus', 'option'); // 'option' refers to the Options page
									?>

									<?php if ($bottom_menus) : ?>
									  <ul>
                                <li class="default_caption_super_small">
                                    © Copyright 2024 Blue sky pest 
                                </li>  
										<?php foreach ($bottom_menus as $bottom_menu) : ?>
										  <?php 
											$menu_text = $bottom_menu['menu_text']; // Get the menu text
											$menu_link = $bottom_menu['menu_link']; // Get the optional link for the menu item
										  ?> 
										  <li class="default_caption_super_small">
											<?php if ($menu_link) : ?>
											  <a href="<?php echo esc_url($menu_link); ?>">
												<?php echo esc_html($menu_text); ?>
											  </a>
											<?php else : ?>
											  <?php echo esc_html($menu_text); ?>
											<?php endif; ?>
										  </li>
										<?php endforeach; ?>
									  </ul>
									<?php else : ?>
									  <p>No services menu found.</p> <!-- This will show if the 'services_menu' repeater field is empty -->
									<?php endif; ?>
                        </div>  
                    </div>
                </div>
            </div>
    </footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/slick-slider/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
      $('.testimonial_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        autoplaySpeed: 5000,
        autoplay: true,
        responsive: [
        {
        breakpoint: 1199,
        settings: {
          slidesToShow: 2.5,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2.3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1.22,
        }
      }
    ]
      });
      
    });

    $(document).ready(function(){
      $('.specialty_cards_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        autoplaySpeed: 5000,
        autoplay: true,
        responsive: [
        {
        breakpoint: 1199,
        settings: {
          slidesToShow: 2.7,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2.5,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2.3,
        }
      },
      {
        breakpoint: 575.5,
        settings: {
          slidesToShow: 1.25,
        }
      }
    ]
      });
      
    });

    $(document).ready(function(){
      $('.blue_card_gap').slick({
        slidesToShow: 1.3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        autoplaySpeed: 5000,
        autoplay: true,
        mobileFirst:true,
        responsive: [
          {
            breakpoint: 1200,
            settings: "unslick"
          },
          {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3.5,
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3.3,
          }
        },
        {
          breakpoint: 767.5,
          settings: {
            slidesToShow: 2.25,
          }
        },
        {
          breakpoint: 575.5,
          settings: {
            slidesToShow: 1.25,
          }
        }
      
      
    ]
      });
      
    });

    $(document).ready(function(){
      $('.blue_card_gap_three').slick({
        slidesToShow: 1.3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        autoplaySpeed: 5000,
        autoplay: true,
        mobileFirst:true,
        responsive: [ 
          {
            breakpoint: 1200,
            settings: "unslick"
          },
          {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3.5,
          }
        },
          {
          breakpoint: 991,
          settings: {
            settings: "unslick",
          }
        },    
        {
          breakpoint: 990,
          settings: {
            slidesToShow: 2.5,
          }
        },
        {
          breakpoint: 767.5,
          settings: {
            slidesToShow: 2.25,
          }
        },
        {
          breakpoint: 575.5,
          settings: {
            slidesToShow: 1.25,
          }
        }
        
      
      
      
    ]
      });
      
    });


    $(document).ready(function(){
      $('.blue_card_click').slick({
        slidesToShow: 1.1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        mobileFirst: true,
        autoplaySpeed: 5000,
        autoplay: true,
        responsive: [
      {
        breakpoint: 767,
        settings: "unslick"
      }
    ]
      });
      
    });


    $(document).ready(function(){
      $('.choose_industry_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        mobileFirst: true,
        autoplaySpeed: 5000,
        autoplay: true,
        responsive: [
      {
        breakpoint: 767,
        settings: "unslick"
      }
    ]
      });
      
    });



    $(document).ready(function(){
      $('.blog_cards').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        autoplaySpeed: 5000,
        autoplay: true,
        responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2.5,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1.5,
        }
      },
      {
        breakpoint: 575.5,
        settings: {
          slidesToShow: 1.2,
        }
      }
    ]
      });
      
    });



    $(document).ready(function(){
      $('.bsky_pest_slider').slick({
        // slidesToShow: 8,
        slidesToShow: 3.1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 300,
        infinite: false,
        autoplaySpeed: 5000,
        autoplay: true,
        mobileFirst: true,
        responsive: [
        {
        breakpoint: 1200,
         settings: "unslick"
      },
      {
        breakpoint: 1199.5,
        settings: {
          slidesToShow: 7.5,
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 6.5,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 4.1,
        }
      },
      

    ]
      });
      
    });






    var width = $( document ).width();
 
    if(width <= 767){
    $('.bsky_history_items .row').slick({
    slidesToShow: 2.22,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    speed: 300,
    infinite: false,
    autoplaySpeed: 5000,
    autoplay: true,
    mobilemobileFirst: true,
    responsive: [
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1.3,
      }
    },
    ]
    });
    }


    var width = $( document ).width();
    
    if(width <= 767){
    $('.eight_card .row').slick({
    slidesToShow: 2.22,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    speed: 300,
    infinite: false,
    autoplaySpeed: 5000,
    autoplay: true,
    mobilemobileFirst: true,
    responsive: [
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1.3,
      }
    },
    ]
    });
    } 

    //   $('.sponsor_list').slick({
    //     slidesToShow: 7,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     dots: false,
    //     speed: 300,
    //     infinite: false,
    //     autoplaySpeed: 5000,
    //     autoplay: true,
    //     mobileFirst: true,
    //     variableWidth: true,
    //     responsive: [
     
    //     {
    //                 breakpoint: 767,
    //                 settings: "unslick"
    //             },
     
     
    // ]
    //   });
</script>

<script>
$(document).ready(function(){
  $(".navbar-toggler-icon").click(function(){
    $(this).toggleClass("change");
    $(".menu_shutter").toggleClass("open"); 
  });
});



// active_menu
$(document).ready(function() {

var url = window.location.pathname,
urlRegExp = new RegExp(url.replace(/\/$/, ''));
if(url != "/"){
  $('.nav-item a, .accordion_menu a, .bsky_filter-list li a, .menu_shutter a').each(function() {
    if($(this).attr("href") != "#" && $(this).attr("href")){
      if(urlRegExp.test(this.href.replace(/\/$/, ''))) {
          $(this).addClass('active');
      }
    }
  });
}

});
setTimeout(function(){
$(".mega_menu_list .active").parents(".hover_li").children("a").addClass("active");
$(".item.active").parents(".accordion-item").find(".accordion-header a").addClass("menu-active");
},1000);

</script>


<?php wp_footer(); ?>

</body>
</html>







