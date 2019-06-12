<?php 
	include('header.php');

?>


<div id="main">

<br>
  <h1 style="text-align:center; font-family:Amatic SC, cursive;">EARRINGS</h1>
  <br>
  <div class="grid-container">
<?php 
		include('products_data.php');


    $earrings = get_all_earrings();
    
    foreach($earrings as $earring){

      echo "<a href='product.php?product_id=".$earring['product_id']."'>";
      echo "<div class='img_div_thumbs'> ";
      echo "<img src='images/thumbs/". $earring['picture']."' /> ";
      echo "<p>".$earring['product_name']."</p>";
      echo "<p> £".$earring['price']." </p></div></a> ";
    }
	
?>
   

</div>
 </div>

<?php
	include('footer.php');
?>






