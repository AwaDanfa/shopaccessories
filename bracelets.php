<?php 
	include('header.php');

?>

<div id="main">

<br>
  <h1 style="text-align:center; font-family:Amatic SC, cursive;">BRACELETS</h1>
  <br>
  <div class="grid-container">
<?php 
		include('products_data.php');

    $bracelets = get_all_bracelets();
  

    //print_r($bracelets);
    
    foreach($bracelets as $bracelet){
   

			echo "<a href='product.php?product_id=".$bracelet['product_id']."'>";
			echo "<div class='img_div_thumbs'> ";
      echo "<img src='images/thumbs/". $bracelet['picture']."' /> ";
      echo "<p>".$bracelet['product_name']."</p>";
      echo "<p> £".$bracelet['price']." </p></div></a> ";
    }
	
?>

</div>
</div>
<?php
	include('footer.php');
?>
