<?php
    // This is just a sample form lifted from http://hzonesp.com/wordpress/make-simple-plugin-wordpress/

    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $hellotxt = $_POST['footertextname'];
        global $chk;
        if( get_option('footer_text') != trim($hellotxt)){
            $chk = update_option( 'footer_text', trim($hellotxt));
        }
    }
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>File List Manager - Upload Your Files Here</h2>
  <?php if(isset($_POST['wphw_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>


<div class='image-preview-wrapper'>
		<img id='image-preview' src='' width='100' height='100' style='max-height: 100px; width: 100px;'>
	</div>
	<input id="upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
	<input type='hidden' name='image_attachment_id' id='image_attachment_id' value=''>

  <!-- here is where we put the media upload box ... -->



</div>
