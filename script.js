

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbutton')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


//JavaScript document

// variable to hold the current image number
var current = 1;

// variable to hold the setInterval timer
var timer;


// This function will adjust the image height according to window size.

function rescale(){
    // rescale function which resizes the height of the image to 80% of the window size

    document.getElementById("image").height = document.documentElement.clientHeight * 0.8;
}

function init(){

   startBtn = document.getElementById("startBtn");
   stopBtn = document.getElementById("stopBtn");

   stopBtn.disabled = true;
   stopBtn.style.cursor ="not-allowed";
}

// ------------------------------------------------------------------//

// These 3 functions are for mouse over links // --------------------//

function changeImage(pictureNo){

    //depending of which string had been passed to the function (and placed in the picture variable), the current variable is set to a certain number corresponding to the image number (ie 1.jpg) 
    //fadein()
    if(pictureNo == "1"){
        current = 1;

    } else if (pictureNo == "2"){
        current = 2;

    } else if (pictureNo == "3"){
        current = 3;

    } else if (pictureNo == "4"){
        current = 4;

    } else if(pictureNo == "5"){
        current = 5;
    }

    //the image source is then changed to the current value
    document.getElementById("image").src = "images/" + current + ".jpg";
}

function previewImage(num){

    // the image source is set to the value passed in num
    document.getElementById("image").src = "images/" + num + ".jpg";
}


function revertImage(){
    // the image src is set back to current
    document.getElementById("image").src = "images/" + current+ ".jpg";

}


////////////////////////  These functions are dedicated to play and stop slide show ///////////////////////////

function start (){

// when the start is pressed, a setInterval is set up, caling the newPic function every 3 seconds
timer = setInterval("newPic()",3000)

startBtn.disabled = true;
startBtn.style.cursor = "not-allowed";

stopBtn.disabled = false;
stopBtn.style.cursor = "pointer";

}


   

function newPic(){
//if the current image is not the last one (ie 3), then move it to the next one
if (current<5){
    current = current + 1;
    //if the current image is the last one (ie5), then set it to the first one
}

else{
    current = 1;
}
// the image src is then changed to the NEW current value
document.getElementById("image").src = "images/" + current + ".jpg";
}

