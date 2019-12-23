<?php
$title = "Design";
include "header.php";
?>

</br></br></br>

    <div class="Container">
        <h1 class="mainTitle">design</h1>
        <center>
            <img src="images/designImages/beashenjpeg-300x135.jpg" width="300" height="135" id="Images" alt="Beashen & Henely" onclick="openlightbox();cImage(1)" /><!--Beashen-->
            <img src="images/designImages/wildFlorida.jpg" width="300" height="300" id="Images" alt="Wild Florida" onclick="openlightbox();cImage(2)"/><!--Wild Florida-->
            <img src="images/designImages/3D-BOZ-300x162.jpg" width="300" height="162" onclick="openlightbox();cImage(3)"/><!--Jurassic Pop-->
            <img src="images/designImages/chameleyumJPEG-231x300.jpg" width="231" height="300" onclick="openlightbox();cImage(4)"/><!--Chameleyum-->
            <img src="images/designImages/fullpageroo-227x300.jpg" width="227" height="300" onclick="openlightbox();cImage(5)"/><!--Table for Two-->
            <img src="images/designImages/PRITCHARD_ad-214x300.jpg" width="214" height="300" onclick="openlightbox();cImage(6)"/><!--Aveda-->
            <img src="images/designImages/pritchard_HOUSE-300x200.jpg" width="300" height="200" onclick="openlightbox();cImage(7)"/><!--Mushroom House-->
            <img src="images/designImages/smbc-300x171.png" width="300" height="171" onclick="openlightbox();cImage(8)"/><!--Soprano-->
            <img src="images/designImages/tooth-282x300.jpg" width="282" height="300" onclick="openlightbox();cImage(9)"/><!--Tooth-->
        </center>
    </div>
    </br></br></br>
    
<div class="lightWrap">   
    <div id="myLightbox" class="lightbox">
  <span class="close cursor" onclick="closelightbox()">&times;</span>
  
  <div class="lightboxContainer">

    <div class="enlargeImage">
      <img src="images/designImages/beashenjpeg-300x135.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">beasly & henely</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/wildFlorida.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">wild florida</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/3D-BOZ-300x162.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">jurassic pop</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/chameleyumJPEG-231x300.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">chameleyum, the no share gum</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/fullpageroo-227x300.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">Ruth Chris Steak House ad campaign (Date Night Special ♥)</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/PRITCHARD_ad-214x300.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">AVEDA shampoo Ad</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/pritchard_HOUSE-300x200.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">quick dream house assignment</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/smbc-300x171.png">
      <ul class="lightDesc">
        <li class="lightTitle">Soprano Musings</li>
        <li class="lightDate">2016</li>
      </ul>
    </div>
    
    <div class="enlargeImage">
      <img src="images/designImages/tooth-282x300.jpg">
      <ul class="lightDesc">
        <li class="lightTitle">a very happy tooth</li>
        <li class="lightDate">2016</li>
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