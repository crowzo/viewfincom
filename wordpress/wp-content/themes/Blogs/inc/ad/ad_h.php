<?php if ( wp_is_mobile() ) { ?>
	<?php if ( get_option('ygj_adh_c_m') ) { ?><div class="abc-pc abc-site"><?php echo stripslashes( get_option('ygj_adh_c_m') ); ?></div><?php } ?>
<?php } else { ?>
	<?php if ( get_option('ygj_adh_c') ) { ?><div class="abc-pc abc-site"><?php echo stripslashes( get_option('ygj_adh_c') ); ?></div><?php } ?>
<?php } ?>