CODE  SAMPLES
==================


$sl_no =  $this->main_db->get_max_colum_value('rank_holders','sl_no');
$this->fields['sl_no'] = ++$sl_no;

==============================================

<select class="form-control" name="department_id" >
	<option value="">Select</option>
	<?php foreach  ($departments as $row) {
	$selected = $row['id'] == $fields['department_id']? 'selected="selected"':''; 
	?>
		<option <?php echo $selected;?> value="<?php echo  $row['id'];?>"><?php echo  $row['name'];?></option>
	<?php } ?>
</select>

===============================================

<input type="checkbox"  name ="status" value="1" <?php echo $fields['about'] == '1' ?'checked="checked"':'';?>>


<?=  $row['status'] == '1'?get_label('Active','success'):get_label('Inactive','warning');?>

===============================================

<img src="<?=  base_url($row['photo'])  ?>" style="width:70px">

===============================================

<textarea class="ckeditor" name="about"><?= $fields['about'];?></textarea>
                    




===============================================



$.ajax({
  	method: "POST",
  	url: "some.php",
  	data: { name: "John", location: "Boston" }
})
.done(function( msg ) {
	alert( "Data Saved: " + msg );
});

////SELECT `id`, `reference_key`, `title`, `image`, `header_image`, `breaf`, `details`, `status`, `created_at`, `updated_at` FROM `web_content` WHERE 1