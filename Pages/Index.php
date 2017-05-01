
<?php
//set my title
$title = 'PHP HW';
//set header
$header = '';
/*
 * include start structure
 */
include('../Structure/Header.php');
?>



<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://devmw.com" target="_blank" class="w3-bar-item w3-button w3-padding-large">HOME</a>

   
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="https://github.com/oExcellent" target="_blank" class="w3-bar-item w3-button">My GitHub</a>
        <a href="http://devmw.com/MaxWaltersPortfolio/Pages/about.php" target="_blank" class="w3-bar-item w3-button">About Max</a>
        </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="https://www.devmw.com" class="w3-bar-item w3-button w3-padding-large">MAIN SITE</a>

  <a href="http://devmw.com/MaxWaltersPortfolio/Pages/contact.php" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">


    <!-- Automatic Slideshow Images -->
    
  


  <div class="mySlides w3-display-container w3-center">
    <img class="banner" src="../Assets/time.jpg" >
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Listen</h3>
      <p><b>The world is what you make it.</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img class="banner"  src="../Assets/pocket-watch.jpg" >
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Look</h3>
      <p><b>Time is of the essence.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img class="banner"  src="../Assets/time-1246003.jpg">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Feel</h3>
      <p><b>Time slipping by.</b></p>    
    </div>
  </div>


  <!-- The consequence Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Let's break the habbit</h2>
    <p class="w3-opacity"><i>Stop procrastinating!</i></p>
    <p class="w3-justify"><b>You may delay, but time will not, and lost time is never found again.</b>
<br>
— Benjamin Franklin
</p>

<h2 class="messages">Consequences</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <div class="container">
        <img class="myPics" src="../Assets/man-1675685_640.jpg"  alt="appointment pic" >
         <div class="overlay">
    <div class="text">Rushing</div>
  </div>
      </div></div>
      
      
        <div class="w3-third">
        <div class="container">
        <img class="myPics" src="../Assets/traffic.jpg"  alt="appointment pic" >
         <div class="overlay">
    <div class="text">Late
</div>
  </div>
      </div></div>


          <div class="w3-third">
        <div class="container">
        <img class="myPics" src="../Assets/crisis.jpg"  alt="appointment pic" >
         <div class="overlay">
    <div class="text">Loss</div>
  </div>
      </div></div>
      
      
    </div>
  </div>





  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Keep in mind</h2>
      <p class="w3-opacity w3-center"><i>“Tomorrow is often the busiest day of the week.”
<br>– Spanish Proverb
</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">“Don’t wait. The time will never be just right.”
<br>– Napoleon Hill

</li>
        <li class="w3-padding">“The habit of always putting off an experience until you can afford it, or until the time is right, or until you know how to do it is one of the greatest burglars of joy. Be deliberate, but once you’ve made up your mind–jump in. 
        <br>–Charles R. Swindoll”
</li>
        <li class="w3-padding">“It is easier to resist at the beginning than at the end.”
<br>– Leonardo da Vinci</li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="../Assets/dalai-lama.jpg" alt="dalai-lama.jpg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>The Dalai Lama</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>a great spiritual leader who travels the world teaching about compassion.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Learn More</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="../Assets/frank-lyold.jpg" alt="Frank Lloyd Wright.jpg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Frank Lloyd Wright</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>American architect designed his most famous house at the age of 67—in two hours.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal2').style.display='block'">Learn More</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img id="samuel" src="../Assets/samuel-johnson.jpg" alt="Samuel Johnson.jpg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Samuel Johnson</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>The great English writer best known for his monumental dictionary.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal3').style.display='block'">Learn More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>The Dalai Lama</h2>
      </header>
      <div class="w3-container">
        <p><label>Tenzin Gyatso is better known these days as the 14th Dalai Lama, a great spiritual leader who travels the world advocating for the Tibetan people and teaching about compassion as the source of happiness in life. But it was not always thus—Gyatso was once a bored student who found it hard to get motivated. “Only in the face of a difficult challenge or an urgent deadline would I study and work without laziness,” he recalls. He has learned his lesson since: “You must not procrastinate,” he now teaches. “Rather you should make preparations so that even if you die tonight, you would have no regrets.”</label></p>
       
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
  <p class="w3-right">See the <a href="https://procrastinus.com/procrastination/famous-procrastinators/ class="w3-text-blue">Source</a></p>
      </div>
    </div>
  </div>

  <div id="ticketModal2" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal2').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Frank Lloyd Wright</h2>
      </header>
      <div class="w3-container">
        <p><label>The great American architect designed his most famous house at the age of 67—in two hours. Wealthy Pittsburgh businessman Edgar Kaufmann Sr. commissioned Wright to create Fallingwater, a house in rural Pennsylvania, in 1934. Wright visited the site in November and wrote to Kaufmann assuring him that he had been working on the plans, but had not actually drawn a thing.

So imagine Wright’s surprise when Kaufmann called him at home early on Sunday morning, on September 22, 1935, to announce that he would be visiting before lunch, and couldn’t wait to see the design. Wright calmly finished breakfast and, while a group of extremely nervous apprentices looked on, drew the plans in the time it took Kaufmann to drive up from Pittsburgh. This time the procrastination paid off: Fallingwater was listed as National Historic Landmark in 1966, and is listed among Smithsonian’s Life List of 28 places “to visit before you die.”</label></p>
       
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal2').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">See the <a href="https://procrastinus.com/procrastination/famous-procrastinators/ class="w3-text-blue">Source</a></p>
      </div>
    </div>
  </div>
  
    <div id="ticketModal3" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal3').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Samuel Johnson</h2>
      </header>
      <div class="w3-container">
        <p><label>In 1751 Dr. Johnson, the great English writer best known for his monumental dictionary, composed a piece for the weekly magazine The Rambler in which he described procrastination as “one of the general weaknesses, which in spite of the instruction of moralists, and the remonstrances of reason, prevail to a greater or less degree in every mind.” Naturally Johnson procrastinated writing the article until the last possible moment, finishing it in the parlor of his good friend Sir Joshua Reynolds while the errand boy waited outside to bring it to press. This was “typical,” according to another friend, Hester Piozzi, who said that “numberless are the instances of his writing under immediate pressure of importunity and distress.”</label></p>
       
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal3').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">See the <a href="https://procrastinus.com/procrastination/famous-procrastinators/ class="w3-text-blue">Source</a></p>
      </div>
    </div>
  </div>

  
<!-- End Page Content -->
</div>
<!-- Add Google Maps 
<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}


</script>-->
<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



<?php

/*
 * include end structure
 */
include('../Structure/Footer.php');


?>