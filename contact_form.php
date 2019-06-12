
<html>
<head>
    <meta><meta/>
    
<?php 
include('header.php');
include_once('contact_form_process.php');

?>
<link rel='stylesheet' href='style.css'/>
<br><br>
<div class="error"> <?php
if(isset($_GET['confirm'])){

    echo $_GET['confirm'];
}

?>

</div>

<div id="wrap">
    <div class="left">
        
        <form action="" method="post">
            <div class="form">

            <h1 style="font-family:Amatic SC, sans-serif;text-align:center;">Contact form</h1>
<h4 style="font-family:Tahoma, Geneva, sans-serif;text-align:center;">Write to us using the form below</h4>
             <table border="1">
             <tr>
                 <br>
                 <br>
                 <br>
                 <br>
             	<td> <label for="details">Fullname </label> </td>
                 <td colspan="2"> <input type="text" value="<?php if(isset($fullname)){ echo $fullname; } ?>" name="fullname"   placeholder="Full Name" >
			    <?php if(isset($error_fullname)) {echo "<span class='error'>". $error_fullname. "</span>"; }?> </td>            
             </tr>
             <br>
             <tr>
                 <td> <label for="email">Email</label> </td>
                 <td colspan="2"> <input type="text" value="<?php if(isset($email)){ echo $email; } ?>" name="email"  placeholder="Email">
			      <?php if(isset($error_email)) { echo "<span class='error'>".$error_email. "</span>";}?> </td>
              </tr>
              <br>     
              <tr>
                 <td> <label for="details">Message</label> </td>
                 <td> 

                    <textarea rows="13" cols="70" name="message"  placeholder="Write Something...">
                            <?php if(isset($message)){ echo $message; } ?>
                    </textarea> 
                 </td>
			     <td> <?php if(isset($error_message)) { echo "<span class='error'>". $error_message. "</span>";} ?> </td>
            </tr>
            
                    <tr>
                <td>&nbsp;</td>
                <td calspan="2"> <input type="submit" value="Submit" name="submit"></td></tr>

        </table>
</div>
		</form>
    </div>

  </div>

        

<div class="right">
<h1 style="font-family:Amatic SC, sans-serif;text-align:center;">VISIT US</h1>
<div class ="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4963.589492109957!2d-0.08070790922236107!3d51.535324402061505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c9675a9812b%3A0xca849993a19f67ad!2sELATT!5e0!3m2!1sen!2suk!4v1513610428038" 
    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK_R1rtOLWukSjSa6eTC1cnE_MQnyjdG4&callback=myMap"></script>



    <?php include('footer.php'); ?>

