<?php 
if (get_row_layout() == 'guide') : 
?>
<section class="bsky_bluebg_cards <?php echo get_sub_field("custom_class"); ?>">
	<div class="bsky_bluebg_cards_outter">
		<div class="bsky_overall_wrapper">
			<div class="bsky_bluebg_cards_inner darkbluebg_section">
				<div class="row">
					<div class="col-md">
						<?php if(get_sub_field("sub_heading")){?>
						<h5 class="heading_5 text-white title_small"><?php echo get_sub_field("sub_heading"); ?></h5>
						<?php }?>
						<h2 class="heading_2 text-white"><?php echo get_sub_field("heading"); ?></h2>
					</div>
				</div>
				<div class="row <?php if(get_sub_field("colum_count") == 4){echo 'blue_card_gap';}else{echo 'blue_card_gap_three';} ?> count_card">
					<?php 
					$column = get_sub_field("column");
					foreach ($column as $key => $value) {
					?>
					<div class="<?php if(get_sub_field("colum_count") == 4){echo 'col-md-3';}else{echo 'col-md-4';} ?>">
						<div class="bluebg_card">
							<div class="bluebg_card_inner">
								<span class="bluebg_count"><?php echo $key + intval(1); ?></span>
								<h5 class="bluebg_card_title heading_5"><?php echo $value['title']; ?></h5>
								<p class="default_body"><?php echo $value['content']; ?></p>
								<?php if($value['btn_text']){?>
								<a href="<?php echo $value['btn_link']; ?>" class="default_caption_title"><?php echo $value['btn_text']; ?></a>
								<?php }?>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>

	<?php endif; ?>