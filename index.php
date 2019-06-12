<?php 
	include('header.php');

?>

<div id="main">

<br>
  <h1 style="text-align:center; font-family:Amatic SC, cursive;">BROWSE OUR PRODUCTS</h1>
  <br>
  <div class="grid-container">
<?php 
		include('products_data.php');


    $products = get_random_products();
    
    foreach($products as $product){


	  echo "<a href='product.php?product_id=".$product['product_id']."'>";
	  echo "<div class='img_div_thumbs'> ";
      echo "<img src='images/thumbs/". $product['picture']."' /> ";
      echo "<p>".$product['product_name']."</p>";
      echo "<p> £".$product['price']." </p></div></a> ";
      
    }
	
?>

</div>
</div>
<?php
	include('footer.php');
?>