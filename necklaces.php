<?php 
	include('header.php');

?>

<div id="main">

<br>
  <h1 style="text-align:center; font-family:Amatic SC, cursive;">NECKLACES</h1>
  <br>
  <div class="grid-container">
<?php 
		include('products_data.php');


    $necklaces = get_all_necklaces();
    
    foreach($necklaces as $necklace){


			echo "<a href='product.php?product_id=".$necklace['product_id']."'>";
			echo "<div class='img_div_thumbs'> ";
      echo "<img src='images/thumbs/". $necklace['picture']."' /> ";
      echo "<p>".$necklace['product_name']."</p>";
      echo "<p> £".$necklace['price']." </p></div></a> ";
      
    }
	
?>

</div>
</div>
<?php
	include('footer.php');
?>