<?php 
	include('header.php');

?>

<div id="main">

<br>
  <h1 style="text-align:center; font-family:Amatic SC, cursive;">HEADBANDS</h1>
  <br>
  <div class="grid-container">
<?php 
		include('products_data.php');

    $headbands = get_all_headbands();
   
    
    foreach($headbands as $headband){
  

      echo "<a href='product.php?product_id=".$headband['product_id']."'>";
			echo "<div class='img_div_thumbs'> ";
      echo "<img src='images/thumbs/". $headband['picture']."' /> ";
      echo "<p>".$headband['product_name']."</p>";
      echo "<p> £".$headband['price']." </p></div></a> ";
    }
	
?>

</div>
</div>
<?php
	include('footer.php');
?>


