 <?php

include('db.php');


 function get_all_products() {
	global $conn;

			$sql="SELECT * FROM product ORDER BY product_id" ;
			$result = mysqli_query($conn,$sql);
			$products = Array();


			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					array_push($products,$row);
				}

			} 
			if($products){
				return $products;
			}
			
			
	}
	

 function get_product($id) {
			global $conn;
			$sql="SELECT * from product WHERE product_id = '$id'" ;
			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows($result)>0){				

				while($product = mysqli_fetch_assoc($result)){
					if($product){
						return $product;
					}
					
				}

			} 

		}


	
  function get_random_products(){

	global $conn;
	$sql = "SELECT * FROM product ORDER BY rand() LIMIT 12";
	$result = mysqli_query($conn,$sql);
	$products = Array();

	if(mysqli_num_rows($result)>0){

		while($row = mysqli_fetch_assoc($result)){
			array_push($products,$row);
		}

	} 
	if($products){
		return $products;
	}
	
}

function get_all_products_by_ascending_price() {
	global $conn;

			$sql="SELECT * FROM product ORDER BY price ASC" ;
			$result = mysqli_query($conn,$sql);
			$products = Array();

			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					array_push($products,$row);
				}
			}
			
			if($products){
				return $products;
			}	
		}	



		function get_all_products_by_descending_price() {
			global $conn;
		
					$sql="SELECT * FROM product ORDER BY price DESC" ;
					$result = mysqli_query($conn,$sql);
					$products = Array();
		
					if(mysqli_num_rows($result)>0){
		
						while($row = mysqli_fetch_assoc($result)){
							array_push($products,$row);
						}
					}
					
					if($products){
						return $products;
					}	
				}	

/* Display all the earrings from the dropdown menu */
function get_all_earrings() {
	global $conn;
				
	$sql="SELECT product.product_id, product.product_name, product.price, product.description, product.picture 
	FROM product,categories 
	WHERE categories.category_id = product.category_id 
	and categories.category_name='Earrings';" ;

		    $result = mysqli_query($conn,$sql);
		    $earrings = Array();
						
			if(mysqli_num_rows($result)>0){
				
			    while($row = mysqli_fetch_assoc($result)){
									array_push($earrings,$row);
								}
				
							} 
				if($earrings){
					    return $earrings;
							}
							
							
					}
					



/* Display all the bracelets from the dropdown menu */
function get_all_bracelets() {
	global $conn;

	$sql="SELECT product.product_id, product.product_name, product.price, product.description, product.picture 
	FROM product,categories 
	WHERE categories.category_id = product.category_id 
	and categories.category_name='Bracelets' " ;
			$result = mysqli_query($conn,$sql);
			$bracelets = Array();


			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					array_push($bracelets,$row);
					
				}

			} 
			if($bracelets){
				return $bracelets;
			}
		}


/* Display all the headbands from the dropdown menu */
function get_all_headbands() {
	global $conn;

	$sql="SELECT product.product_id, product.product_name, product.price, product.description, product.picture 
	FROM product,categories 
	WHERE categories.category_id = product.category_id 
	and categories.category_name='Headbands'" ;
			$result = mysqli_query($conn,$sql);
			$headbands = Array();


			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					array_push($headbands,$row);
				}

			} 
			if($headbands){
				return $headbands;
			}
							
			
	}


/* Display all products by necklaces category from the dropdown menu */
function get_all_necklaces() {
	global $conn;

			$sql="SELECT product.product_id, product.product_name, product.price, product.collection, product.description, product.picture 
			FROM product, categories 
			WHERE categories.category_id = product.category_id 
			and categories.category_name='Necklaces';" ;
			$result = mysqli_query($conn,$sql);
			$necklaces = Array();


			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					array_push($necklaces,$row);
				}

			} 
			if($necklaces){
				return $necklaces;
			}
			
			
	}

	function get_all_necklaces_by_connection() {
		global $conn;
	
				$sql="SELECT (necklaces) FROM product ORDER BY price DESC" ;
				$result = mysqli_query($conn,$sql);
				$necklaces = Array();
	
				if(mysqli_num_rows($result)>0){
	
					while($row = mysqli_fetch_assoc($result)){
						array_push($necklaces,$row);
					}
				}
				
				if($products){
					return $products;
				}	
			}
?>


	

