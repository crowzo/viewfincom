<?php
//按时间获得评论数最多的文章
function hot_comment_viewed($number, $days){
$limit_date = current_time('timestamp') - ($days*26400);
if($limit_date < 0){$limit_date=0;}
$limit_date = date("Y-m-d H:i:s",$limit_date); 
	if ( get_post_meta($post->ID, 'wzshow', true) ) {
    	$image = get_post_meta($post->ID, 'wzshow', true);
		$first_img="".get_template_directory_uri()."/timthumb.php?src=".$image."&w=75&h=75&zc=1";
    } else {
	        $content = $post->post_content;
	        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $strResult, PREG_PATTERN_ORDER);
	        $n = count($strResult[1]);
	        if($n > 0){
				$first_img="".get_template_directory_uri()."/timthumb.php?src=".$strResult[1][0]."&w=75&h=75&zc=1";
	        } else { 
				$random = mt_rand(1, 10);
				$first_img="".get_template_directory_uri()."/timthumb.php?src=".get_template_directory_uri()."/images/random/". $random .".jpg&w=75&h=75&zc=1";
	        }
	}
	$post_cbtimes=get_the_date('Y/m/d');