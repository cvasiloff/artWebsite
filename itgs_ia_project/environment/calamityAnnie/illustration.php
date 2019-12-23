<?php
$title = "Illustration";
include "header.php";
?>
</br></br></br>

    <div class="Container">
        <h1 class="mainTitle">illustration</h1>
        <center>
            <img src="images/illustrationImages/beep-300x174.jpg" width="300" height="174" onclick="openlightbox();cImage(1)"/>
            <img src="images/illustrationImages/botbabe-300x267.jpg" width="300" height="267" onclick="openlightbox();cImage(2)"/>
            <img src="images/illustrationImages/dummy.jpg" width="300" height="300" onclick="openlightbox();cImage(3)"/>
            <img src="images/illustrationImages/merlsoutfits.jpg" width="300" height="260" onclick="openlightbox();cImage(4)"/>
            <img src="images/illustrationImages/bbywill2fllat-198x300.jpg" width="198" height="300" onclick="openlightbox();cImage(5)"/>
            <img src="images/illustrationImages/gilland22i-260x300.png" width="260" height="300" onclick="openlightbox();cImage(6)"/>
            <img src="images/illustrationImages/naagaapunksUNSIGN-270x300.png" width="270" height="300" onclick="openlightbox();cImage(7)"/>
            <img src="images/illustrationImages/naruredraw1-300x289.jpg" width="300" height="289" onclick="openlightbox();cImage(8)"/>
            <img src="images/illustrationImages/thechocolatehouseFLAT-229x300.jpg" width="229" height="300" onclick="openlightbox();cImage(9)"/>
            <img src="images/illustrationImages/playingwfire-241x300.png" width="241" height="300" onclick="openlightbox();cImage(10)"/>
            
        </center>
    </div>
    </br></br></br>
    
    <div class="lightWrap">   
    <div id="myLightbox" class="lightbox">
  <span class="close cursor" onclick="closelightbox()">&times;</span>
  
  <div class="lightboxContainer">
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/beep-300x174.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">landscape practice</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/botbabe-300x267.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">genos the cyborg doodles</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/dummy.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">another naruto? </li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/merlsoutfits.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">merlin’s clashing outfits</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/bbywill2fllat-198x300.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">going to the zoo</li>
        <li class="lightDate">2015</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/gilland22i-260x300.png">
      <ul class="lightDesc">
        <li class="lightTitle">story time</li>
        <li class="lightDate">2015</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/naagaapunksUNSIGN-270x300.png">
      <ul class="lightDesc">
        <li class="lightTitle">light/perspective experiment</li>
        <li class="lightDate">2015</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/naruredraw1-300x289.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">a Naruto re-draw</li>
        <li class="lightDate">2015</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/illustrationImages/thechocolatehouseFLAT-229x300.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">(an illustration for a friend’s story)</li>
        <li class="lightDate">2015</li>
      </ul>
    </div>

    <div class="enlargeImage">
      <img src="images/illustrationImages/playingwfire-241x300.png">
      <ul class="lightDesc">
        <li class="lightTitle">kid merlin</li>
        <li class="lightDate">2014</li>
      </ul>
    </div>
    
    <div class="description-container">
      <p id="description"></p>
    </div>
    </div>
    </div>
    </br></br></br>
</div><!--END LIGHTWRAP-->
<?php
include ("footer.php");
?>    
</body>
</html>