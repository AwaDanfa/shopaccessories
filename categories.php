<?php 
ob_start();
# require_once "products_data.php";
include_once "header.php";
?>


<div class="container categories">
    <div class="large box" >
        <h2> BROWSE OUR CATEGORIES </h2>
       
        <div id="small box">
                <div class="box">
                    <img src="images\categories\necklaces.jpg"  width="300" height="300">
                    <a href="necklaces.php" >Necklaces</a>
                    
                </div>
<br><br>
                
                <div class="box">
                    <img src="images\categories\headbands.jpg" width="300" height="300">
                    <a href="headbands.php" >Headbands</a>     
                </div>
<br><br>             
                <div class="box">
                    <img src="images\categories\earrings.jpg" width="300" height="300">
                    <a href="earrings.php" >Earrings</a>
                </div>
                
<br><br>

                <div class="box inactive">
                    <img src="images\categories\bracelets.jpg" width="300" height="300">
                    <a href="#" >Bracelets</a>
                </div>

        </div> <!-- End of small box -->

    </div> <!-- End of large box -->

</div> <!-- End of container categories -->

      
<?php
include_once "footer.php";
?>