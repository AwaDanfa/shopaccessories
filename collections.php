<?php 
	include('header.php');

?>


<title>Collections </title>

<script type="text/javascript" src="js/script.js"></script>


</head>


<body onload="init()">


<div id="main">
<h1 style="text-align:center; font-family:Amatic SC, cursive;">BROWSE OUR COLLECTIONS</h1>




<img id="image" src="images/1.jpg" />



<div>
	<br><br>
	<span onclick="changeImage('1')" onmouseover="previewImage(1)" onmouseout="revertImage()"><img src="images/1.jpg" class="thumbs_slideshow"></span>  
	<span onclick="changeImage('2')" onmouseover="previewImage(2)" onmouseout="revertImage()"><img src="images/2.jpg" class="thumbs_slideshow"></span> 
	<span onclick="changeImage('3')" onmouseover="previewImage(3)" onmouseout="revertImage()"><img src="images/3.jpg" class="thumbs_slideshow"></span> 
	<span onclick="changeImage('4')" onmouseover="previewImage(4)" onmouseout="revertImage()"><img src="images/4.jpg" class="thumbs_slideshow"></span> 
	<span onclick="changeImage('5')" onmouseover="previewImage(5)" onmouseout="revertImage()"><img src="images/5.jpg" class="thumbs_slideshow"></span> 

<br><br>

</div>

<br>


</div>

</body>

</html>




<?php
	include('footer.php');
?>


