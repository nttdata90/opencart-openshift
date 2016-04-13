<?php 
	$cols = 4;
	$span = 12/$cols; 
?>
<div class="box box-produce">
  <h3 class="box-heading"><span><?php echo $heading_title; ?></span></h3>
  <div class="box-content">
    <div class="box-product">
			  <?php foreach ($products as $i => $product) { ?>
				 <?php if( $i++%$cols == 0 ) { ?>
				  <div class="row-fluid">
				<?php } ?>
			  <div class="product-block span<?php echo $span;?>"><div class="product-block-inner">
				<?php if ($product['thumb']) { ?>
				<div class="image">
<?php if( $product['special'] ) {   ?>
		    	<div class="product-label-special label"><?php echo $this->language->get( 'text_sale' ); ?></div>
		    	<?php } ?>
					<a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a>
					
				</div>
				<?php } ?>

				<div class="product-meta">
					<h4 class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
					<div class="description">
						<?php echo utf8_substr( strip_tags($product['description']),0,85);?>...
					</div>					
					<div class="product-action">
			  			<span class="wishlist-compare">
						  <a class="wishlist" onclick="addToWishList('<?php echo $product['product_id']; ?>');" title="<?php echo $this->language->get("button_wishlist"); ?>" ><?php echo $this->language->get("button_wishlist"); ?></a>
						  <a class="compare" onclick="addToCompare('<?php echo $product['product_id']; ?>');" title="<?php echo $this->language->get("button_compare"); ?>" ><?php echo $this->language->get("button_compare"); ?></a>
						</span>
						<?php if ($product['rating']) { ?>
						<span class="rating pull-right"><img src="catalog/view/theme/<?php echo $this->config->get('config_template');?>/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></span>
						<?php } ?>
					</div>
					 <div class="price-cart">
					<?php if ($product['price']) { ?>
						<div class="price pull-left">
						  <?php if (!$product['special']) { ?>
						  <?php echo $product['price']; ?>
						  <?php } else { ?>
						  <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
						  <?php } ?>
						</div>
					
				 	<?php } ?>
				  
						  <div class="cart">
						  	<input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="button" />
						  </div>
				 	</div>
				 </div>
			  </div>
			</div>
			  
			 <?php if( $i%$cols == 0 || $i==count($products) ) { ?>
				 </div>
				<?php } ?>
				
			  <?php } ?>

    </div>
  </div>
</div>
