<?php 
/*
Template Name: 标签页面
*/
/*
* 该主题由Xiao伟破解完成。
* Xiao伟博客交流群欢迎您：11931589
* 出售域名授权系统：
* 一口价3680，不还价。
* QQ：403641198
*/
get_header();?>
<?php if(have_posts()): while(have_posts()):the_post();  ?>
<div id="page-content" class="page-single" >
	<div class="page-title" style="background:#504B51 url(<?php echo tags_banner_pic(); ?>);background-repeat: no-repeat;background-size: cover;background-position: center top;">
		<div class="container">
			<h1 class="title">
				<?php the_title(); ?>
			</h1>
			<div class="page-dec">
				<?php the_content();?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="page-content">
			<ul class="tag-clouds clearfix">
				<?php 
					$tags_list = get_tags('orderby=count&order=DESC&number=30');
					if ($tags_list) { 
						foreach($tags_list as $tag) {
							echo '<li><a class="tagname" href="'.get_tag_link($tag).'">'. $tag->name .'</a><strong>x '. $tag->count .'</strong><br>'; 
							$posts = get_posts( "tag_id=". $tag->term_id ."&numberposts=1" );
							if( $posts ){
								foreach( $posts as $post ) {
									setup_postdata( $post );
									echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br><span class="muted">'.get_the_time('Y-m-d').'</span class="muted">';
								}
							}
							echo '</li>';
						} 
					} 
				?>
			</ul>	
		</div>
		<div class="clear"></div>
		<?php if (comments_open()) comments_template( '', true ); ?>
		
	</div>
</div>
<?php endwhile; endif; ?>	
<?php get_footer(); ?>
