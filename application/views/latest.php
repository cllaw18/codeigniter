<h1><? echo $content;?></h1><?
if(isset($latest_news)){
	if(count($latest_news)>0){
		foreach($latest_news as $news){
			echo '<h2>'.$news['title'].'</h2>';
		}
	} else echo '<h2>'.$no_data_message.'</h2>';
} else echo '<h2>'.$no_data_message.'</h2>'; 
?>
 