<?php
include_once('header.php')
;?>
	<!-- Home -->

	<?php 

	if($request->hasGet('id')){
		$id=$request->get('id');
	
	}else{
		$id=1;
	}

	$product_object = new Products;
	$pr=$product_object->selectId($id,"products.name AS prodName ,
	products.id AS prodId ,price,img,`desc`,cats.name As catName");

?>

	<!-- Single Product -->
<?php if(!empty($pr)):
?>
	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<!-- <div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="images/single_4.jpg"><img src="images/single_4.jpg" alt=""></li>
						<li data-image="images/single_2.jpg"><img src="images/single_2.jpg" alt=""></li>
						<li data-image="images/single_3.jpg"><img src="images/single_3.jpg" alt=""></li>
					</ul>
				</div> -->

				<!-- Selected Image -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="image_selected"><img src="<?= URL . 'uploads/'. $pr['img'] ;?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-6 order-3">
					<div class="product_description">
						<div class="product_category"><?=$pr['catName'] ;?></div>
						<div class="product_name"><?=$pr['prodName'] ;?></div>
						<div class="product_text"><p><?=$pr['desc'] ;?></p></div>
						<div class="order_info d-flex flex-row">
							<form  method="POST" action="handelers/add-to-cart.php">
								<div class="clearfix" style="z-index: 1000;">
							
									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" name = "qty" type="number" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

                                    <div class="product_price">$<?=$pr['price'] ;?></div>

								</div>
								
								<input type="hidden" name="id" value="<?= $pr['prodId'] ; ?>">
								<input type="hidden" name="name" value="<?= $pr['prodName'] ; ?>">
								<input type="hidden" name="price" value="<?= $pr['price'] ; ?>">
								<input type="hidden" name="img" value="<?= $pr['img'] ; ?>">

								<div class="button_container">
									<button type="submit" name="submit" class="button cart_button">Add to Cart</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php else :?>

	<h1>
		not found this ip
	</h1>
	<?php endif ;?>



	<?php
include_once('header.php')
;?>