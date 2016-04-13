<?php 
	$d = array(
		'demo_widget_social_data' => '
		
			<h3>Socialize</h3>

			<ul>
				<li class="facebook"><a href="#">facebook</a></li>
				<li class="dribbble"><a href="#">dribbble</a></li>
				<li class="google-plus"><a href="#">google plus</a></li>
			</ul>

			<ul>
				<li class="twitter"><a href="#">twitter</a></li>
				<li class="vimeo"><a href="#">vimeo</a></li>
				<li class="email"><a href="#">email</a></li>
				<li class="rss"><a href="#">RSS</a></li>
			</ul>
		',
		'demo_widget_newsletter_data'=>'
			<h3>Newsletter</h3>

			<p><strong style="color:#efefef;">Sign Up for Our Newsletter:</strong></p>

			<p>Get the word out Share this page with your friends and family. Enter your email address...</p>

			<div class="newsletter-submit"><input alt="username" class="inputbox" name="email" size="31" type="text" value="Type your email" /><input class="button" name="Submit" type="submit" value="Sign up" /></div>

			<p><img alt="" src="image/data/paypal.png" /></p>
		'
	);
	$module = array_merge( $d, $module );

//	echo '<pre>'.print_r( $languages, 1 );die;
?>

<div class="inner-modules-wrap">
	<div class="vtabs mytabs" id="my-tab-innermodules">
		<a onclick="return false;" href="#tab-imodule-footer" class="selected"><?php echo $this->language->get('Footer Center');?></a>
	 </div>

	 <div class="page-tabs-wrap">
	 		<div id="tab-imodule-footer">

				<h4><?php echo $this->language->get( 'Social Module' ) ; ?></h4>

				<div id="language-widget_social_data" class="htabs mytabstyle">
		            <?php foreach ($languages as $language) { ?>
		            <a href="#tab-language-widget_social_data-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
		            <?php } ?>
		          </div>

				<?php foreach ($languages as $language) {   ?>
		          <div id="tab-language-widget_social_data-<?php echo $language['language_id']; ?>">
		           
		            <table class="form">
		            	<?php $text =  isset($module['widget_social_data'][$language['language_id']]) ? $module['widget_social_data'][$language['language_id']] : $module['demo_widget_social_data'];  ?>

		              <tr>
		                <td><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $this->language->get('Social');?>: </td>
		                <td><textarea name="themecontrol[widget_social_data][<?php echo $language['language_id']; ?>]" id="widget_social_data-<?php echo $language['language_id']; ?>" rows="5" cols="60"><?php echo $text; ?></textarea></td>
		              </tr>
		            </table>
		          </div>
		          <?php } ?>


				<h4><?php echo $this->language->get( 'Newsletter Module' ) ; ?></h4>

				<div id="language-widget_newsletter_data" class="htabs mytabstyle">
		            <?php foreach ($languages as $language) { ?>
		            <a href="#tab-language-widget_newsletter_data-<?php echo $language['language_id']; ?>"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a>
		            <?php } ?>
		          </div>

				<?php foreach ($languages as $language) {   ?>
		          <div id="tab-language-widget_newsletter_data-<?php echo $language['language_id']; ?>">
		           
		            <table class="form">
		            	<?php $text =  isset($module['widget_newsletter_data'][$language['language_id']]) ? $module['widget_newsletter_data'][$language['language_id']] : $module['demo_widget_newsletter_data'];  ?>

		              <tr>
		                <td><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $this->language->get('Newsletter');?>: </td>
		                <td><textarea name="themecontrol[widget_newsletter_data][<?php echo $language['language_id']; ?>]" id="widget_newsletter_data-<?php echo $language['language_id']; ?>" rows="5" cols="60"><?php echo $text; ?></textarea></td>
		              </tr>
		            </table>
		          </div>
		          <?php } ?>

			</div>
				<script type="text/javascript" src="view/javascript/ckeditor/ckeditor.js"></script> 
				<script type="text/javascript"><!--
				$("#language-widget_social_data a").tabs();
				<?php foreach( $languages as $language )  { ?>
				CKEDITOR.replace('widget_social_data-<?php echo $language['language_id']; ?>', {
					filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
				});
				<?php } ?>
				//--></script> 

				<script type="text/javascript"><!--
				$("#language-widget_newsletter_data a").tabs();
				<?php foreach( $languages as $language )  { ?>
				CKEDITOR.replace('widget_newsletter_data-<?php echo $language['language_id']; ?>', {
					filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
					filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
				});
				<?php } ?>
				//--></script> 
	 </div>
	 <div class="clearfix clear"></div>	
</div>

