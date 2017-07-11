<!--
<div class="clearfix"></div>
<?php if( suxingme('suxingme_footer_style','suxingme_footer_style_1') == 'suxingme_footer_style_1' ) { ?>
<div id="footer" class="one-s-footer clearfix">
	<div class="container">
		<div class="social-footer">
			<?php if(suxingme('suxingme_social_weibo')){?>
				<a class="weiboii" href="<?php echo suxingme('suxingme_social_weibo') ;  ?>" target="_blank"><i class="icon-weibo"></i></a>
			<?php } ?>
			<?php if(suxingme('suxingme_social_qqweibo')){?>
				<a class="ttweiboii" href="<?php echo suxingme('suxingme_social_qqweibo') ;  ?>" target="_blank" rel="nofollow" title="腾讯微博"><i class="icon-tencent-weibo"></i></a>
			<?php } ?>
			<?php if(suxingme('suxingme_social_email')){?>
				<a class="mailii" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=<?php echo suxingme('suxingme_social_email');?>"target="_blank"><i class="icon-mail-2"></i></a>
			<?php } ?>
			<?php if(suxingme('suxingme_social_qq')){?>
				<a class="qqii" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo suxingme('suxingme_social_qq');  ?>&site=qq&menu=yes" target="_blank"><i class="icon-qq"></i></a>
			<?php } ?>
			<?php if(suxingme('suxingme_social_weixin')){?>
				<a id="tooltip-f-weixin" class="wxii" href="javascript:void(0);"><i class="icon-wechat"></i></a>
			<?php } ?>
		</div>
		<div class="footer-copyright">Copyright © <?php echo intval(date('Y')); ?> <a class="site-link" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a> <?php if( suxingme('suxingme_beian') ) { ?> <a href="http://www.miitbeian.gov.cn" rel="external nofollow" target="_blank"><?php echo suxingme('suxingme_beian'); ?></a><?php } ?> <?php if( suxingme('suxingme_statistics_code') ) { ?><?php echo suxingme('suxingme_statistics_code'); ?><?php } ?>
		<br/>Powered By WordPress · Theme By <a href="http://www.suxing.me" target="_blank" rel="nofollow">Suxing</a>
		</div>
	</div>
</div>
<?php } else{ ?>
<div id="footer" class="two-s-footer clearfix">
	<div class="footer-box">
		<div class="container">
			<div class="social-footer">
				<?php if(suxingme('suxingme_social_weibo')){?>
					<a class="weiboii" href="<?php echo suxingme('suxingme_social_weibo') ;  ?>" target="_blank"><i class="icon-weibo"></i></a>
				<?php } ?>
				<?php if(suxingme('suxingme_social_qqweibo')){?>
					<a class="ttweiboii" href="<?php echo suxingme('suxingme_social_qqweibo') ;  ?>" target="_blank" rel="nofollow" title="腾讯微博"><i class="icon-tencent-weibo"></i></a>
				<?php } ?>
				<?php if(suxingme('suxingme_social_email')){?>
					<a class="mailii" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=<?php echo suxingme('suxingme_social_email');?>"target="_blank"><i class="icon-mail-2"></i></a>
				<?php } ?>
				<?php if(suxingme('suxingme_social_qq')){?>
					<a class="qqii" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo suxingme('suxingme_social_qq');  ?>&site=qq&menu=yes" target="_blank"><i class="icon-qq"></i></a>
				<?php } ?>
				<?php if(suxingme('suxingme_social_weixin')){?>
					<a id="tooltip-f-weixin" class="wxii" href="javascript:void(0);"><i class="icon-wechat"></i></a>
				<?php } ?>
			</div>
			<div class="nav-footer">
			<?php
				if ( function_exists( 'wp_nav_menu' ) && has_nav_menu('footer-nav') ) {
					$frlink = wp_nav_menu( array( 'container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'footer-nav','depth' => 1, 'echo' => false ) );
					echo strip_tags( $frlink, '<a>' );
				} else {
					echo '<a href="/wp-admin/nav-menus.php">请到[后台->外观->菜单]中设置菜单。</a>';
				} ?>
			</div>
			<div class="copyright-footer">
				<p>Copyright © <?php echo intval(date('Y')); ?> <a class="site-link" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>

				<?php if( suxingme('suxingme_beian') ) { ?>
					<a href="http://www.miitbeian.gov.cn" rel="external nofollow" target="_blank"><?php echo suxingme('suxingme_beian'); ?></a>
				<?php } ?>
				<?php if( suxingme('suxingme_statistics_code') ) { ?><?php echo suxingme('suxingme_statistics_code'); ?>
				<?php } ?> · Powered By WordPress · Theme By <a href="http://www.suxing.me" target="_blank">Suxing</a> </p>
			</div>
			<?php if(is_home()&&!is_paged()){ ?>
			<div class="links-footer">
				<span>友情链接：</span>
				<?php
					$fr_link = array(
						'categorize' => false,
						'category' => suxingme('select_link_friends'),
						'before' => false,
						'after' => false,
						'title_li' => false,
						'echo' => false
					);
					$fr_link_rel = wp_list_bookmarks( $fr_link );
					if( empty( $fr_link_rel ) ){
						echo '<a href="'.get_option('home').'/wp-admin/link-manager.php">请到后台 [链接] 中添加链接，并在 [主题选项 CMS设置] 中选择链接分类</a>';
					} else {
						echo $fr_link_rel;
					}
				?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>

<div class="search-form">
	<form method="get" action="<?php bloginfo('url'); ?>" role="search">
		<div class="search-form-inner">
			<div class="search-form-box">
				 <input class="form-search" type="text" name="s" placeholder="键入搜索关键词">
				 <button type="submit" id="btn-search"><i class="icon-search"></i> </button>

			</div>
			<?php
				$keyword = suxingme('suxingme_custom_searchkey');
				if( ! empty( $keyword ) ) :
					$key = explode(',',$keyword);

			?>
			<div class="search-commend">
				<h4>大家都在搜</h4>
				<ul>
					<?php
						for ($i=0; $i < count($key); $i++) {
							echo '<li><a href="'.get_option('home').'/?s='.$key[$i].'">'.$key[$i].'</a></li>';
						}
					?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</form>
	<div class="close-search">
		<span class="close-top"></span>
			<span class="close-bottom"></span>
    </div>
</div>
<div class="f-weixin-dropdown">
	<div class="tooltip-weixin-inner">
		<h3>关注我们的公众号</h3>
		<div class="qcode">
			<img src="<?php echo suxingme('suxingme_social_weixin') ; ?>" width="160" height="160" alt="微信公众号">
		</div>
	</div>
	<div class="close-weixin">
		<span class="close-top"></span>
			<span class="close-bottom"></span>
    </div>
</div>
     -->

     <footer id="footer" style="padding:20px;">
         <div class="container">
             <div class="row">
                 <div class="row">



                     <div class="col-md-4 col-xs-12 pull-right" style="padding-bottom: 20px;">
                         <div class="col-md-4 col-xs-4" style="text-align: center">

                             <a href="http://mvs.live/" target="_blank">
                                 <img src="/viewfin/images/logos/MetaverseLOGO-PNG-02.png" alt="" title="Metaverse" style="max-height:40px;"></a>

                         </div>
                         <div class="col-md-3 col-xs-3" style="text-align: center">
                             <a href="https://szzc.com" target="_blank">
                                 <img src="/viewfin/images/logos/szzc_logo.png" alt="" style="max-height:40px;">
                             </a>

                         </div>
                         <div class="col-md-5 col-xs-5" style="text-align: center">
                             <a href="http://zengold.org/" target="_blank">
                                 <img src="/viewfin/images/logos/zengold.png" alt="" style="max-height:40px;" title="Zengold"></a>

                         </div>
                     </div>

                     <div class="col-md-4 col-xs-12">

                         <div class="col-md-12 col-xs-12">
                             <div class="row">
                                 <a href="/news/" style="color: white;margin:5px;margin-left:0px;">News</a> |
                                 <a href="/media/" style="color: white;margin:5px;">Media</a> |
                                 <a href="/blog/viewfinblog/" style="color: white;margin:5px;">Blog</a> |
                                 <a href="/联系我们/?preview=true" style="color: white;margin:5px;">Contact Us</a>
                             </div>

                             <div class="social-links row">
                                 <ul class="team-social">
                                     <li><a href="https://twitter.com/infoViewFin" target="_blank"><i class="hc-twitter"></i></a></li>
                                     <li><a href="https://www.linkedin.com/company/%E7%BB%B4%E4%BC%98" target="_blank"><i class="hc-linkedin"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="row copy-text" style="text-align: left;">
                             <div class="col-md-12 col-xs-12">
                                 <p>© 2017 Viewfin. All rights reserved.</p>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-4">
                         <div class="row" style="margin-bottom: 20px;">
                             <div class="col-md-12">沪ICP备14042852号</div>
                             <div class="col-md-12">上海艾固商务咨询有限公司</div>
                             <div class="col-md-12">+86 21 60758514</div>
                             <div class="col-md-12">9F, No.18 Dongyuan Road,</div>
                             <div class="col-md-12">Lujiazui, Shanghai 200120</div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </footer>

<?php wp_footer();?>
</body>
</html>

<script type="text/javascript" src="/viewfin/js/jquery.js"></script>
<!--<script type="text/javascript" src="/viewfin/js/bundle.js"></script>-->
<script type="text/javascript" src="/viewfin/js/bundle.js"></script> <!-- banner and mask js bug -->
<script type="text/javascript" src="/viewfin/js/SmoothScroll.js"></script>
<script type="text/javascript" src="/viewfin/js/main.js"></script>
<script type="text/javascript" src="/viewfin/js/w3.js"></script>
<script>
    w3.includeHTML();
</script>