<?php 
	include('header.php');

?>
<br>




<div id="main">

<br>
  <h1 style="text-align:center; font-family:Amatic SC, cursive;">PRODUCTS</h1>
  <br>
  <div class="grid-container">


<?php // OKAMA UK thumbnail page 
		include('products_data.php');
		 
		$products = get_all_products();
		foreach($products as $product){

			echo "<a href='product.php?product_id=".$product['product_id']."'>";
			echo "<div class='img_div_thumbs'> ";
			echo "<img src='images/thumbs/". $product['picture']."' /> ";
			echo "<p>".$product['product_name']."</p></div></a>";
			}
?>
   </div>
</div>

<?php
	include('footer.php');
?>