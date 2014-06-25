<h1><? echo $content;?></h1> 
<?php
 
$attributes = array('class' => 'email', 'id' => 'myform'  );
echo form_open($site_url."/contact",$attributes); ?>
 
 
 
 <h5><? echo $field_name;?></h5>
 <? 
//echo form_error('name');
if(isset($error_messages['name'])){ 
		if( $error_messages['name']!=''){
			echo '<h6>'.$error_messages['name'].'</h6>';
		}
	}
?>
<input type="text" name="name" value="<?php echo set_value('name'); ?>" size="50" />



<h5><? echo $field_email;?></h5>
<? if(isset($error_messages['email'])){ 
		if( $error_messages['email']!=''){
			echo '<h6>'.$error_messages['email'].'</h6>';
		}
	}
?>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<h5><? echo $field_content;?></h5>
<? if(isset($error_messages['content'])){ 
		if( $error_messages['content']!=''){
			echo '<h6>'.$error_messages['content'].'</h6>';
		}
	}
?>
<textarea name="content" cols=39 rows=10><?php echo set_value('content'); ?></textarea> 
<div><input type="submit" value="<? echo $submit;?>" /></div> 
</form>