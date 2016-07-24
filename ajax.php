<?php
	include 'config.php';
	
	extract($_POST);
	$user_id = '3000';

	// check if the user has already clicked on the unlike (rate = 2) or the like (rate = 1)
		

		$like_sql = mysql_query('SELECT COUNT(*) FROM  wcd_yt_rate WHERE ip = "'.$user_id.'" and id_item = "'.$page_ID.'" and rate = 1 ');
		$like_count = mysql_result($like_sql, 0); 

	if($act == 'like'): //if the user click on "like"
		if(($like_count == 0) && ($dislike_count == 0)){
			mysql_query('INSERT INTO wcd_yt_rate (id_item, ip, rate )VALUES("'.$page_ID.'", "'.$user_id.'", "1")');
		}
		
	endif;
	if($act == 'dislike'): //if the user click on "like"
		if(($like_count == 0) && ($dislike_count == 0)){
			mysql_query('INSERT INTO wcd_yt_rate (id_item, ip, rate )VALUES("'.$page_ID.'", "'.$user_id.'", "2")');
		}
		if($like_count == 1){
			mysql_query('UPDATE wcd_yt_rate SET rate = 2 WHERE id_item = '.$page_ID.' and ip ="'.$user_id.'"');
		}

	endif;
?>