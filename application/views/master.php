<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <?php echo $site_title;?> </title>
	<link href="<?php echo $base_url;?>css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>      
<div class="header">   
  <div class="nav-bar left">
   <ul class="button-group">
	 <li><a href="<?php echo $site_url;?>/home" class="button"><?php echo $this->menu_data['home'];?></a></li>
	 <li><a href="<?php echo $site_url;?>/home/latest" class="button"><?php echo $this->menu_data['latest_news'];?></a></li>
	 <li><a href="<?php echo $site_url;?>/contact" class="button"><?php echo $this->menu_data['contact'];?></a></li>
	</ul>
  </div>
  <div class="lang-bar right">
	<ul class="button-group">
	<?php 
	if(count($this->site_data['site_language'])>0){
		foreach($this->site_data['site_language'] as $code=>$language){
			echo '<li><a href="'.$base_url.$code."/".$this->current_page.'">'.$language.'</a></li>';
		}
	}
  ?></ul></div>
</div>
<div class="content">
 <?php echo $main_content;?>
</div>
</body>
</html> 
