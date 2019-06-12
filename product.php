
<html lang='en-GB'>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Josefin+Slab" rel="stylesheet"> 
	</head>
	
	<body>
	<?php 
	include('header.php');

?>
<div id="main">
<br>
  <h2 style="text-align:center; font-family:Amatic SC, cursive;" >PRODUCT DESCRIPTION</h2>
 
	<?php 
	
	include('products_data.php');
	if(isset($_GET['product_id'])){
			$id = $_GET['product_id'];
			$product = get_product($id);
		}
	
	
	if(isset($product)){?>


		<div id="img_div">
			<img src="images/large/<?php if(isset($product['picture'])) echo $product['picture'] ?>" />
		
		</div>

		<div id="content_div">
			<?php if(isset($product['product_id'])) echo $product['product_id']; ?>
		    <br><br>
			<?php if(isset($product['product_name'])) echo $product['product_name']; ?>
		    <br><br>
			<?php if(isset($product['price'])) echo $product['price']; ?>
		    <br><br>
			<?php if(isset($product['collection'])) echo $product['collection']; ?>
			<br><br>
			<?php if(isset($product['description'])) echo $product['description']; ?>
		    <br><br><br>
			
			<br>
	        <a href="form2.php" class="button" input type="submit" name="submit" value="Click here" ></a>
		
	
	      
            <button id="button"> Add to Bag </button>


		</div>

	<?php } else { echo "<div id='img_div' style='color:red;width:98%; height:100px;'> No Record Found!</div>"; } ?>

</div>

</body>

<?php
	include('footer.php');
?>
