
<footer class="footer">
    <ul>
        <a href="contactForm.php"><li class="mail" alt="Contact Me"></li></a>
        <a href="http://bloomedlate.tumblr.com"><li class="tumblr"></li></a>
    </ul>
</div>

</div><!--END PAGEWRAPPER-->

<script>
function cImage(n) {
  showImage(slideIndex = n);
}

function openlightbox() {
  document.getElementById('myLightbox').style.display = "block";
}

function closelightbox() {
  document.getElementById('myLightbox').style.display = "none";
}
function showImage(n) {
  var images = document.getElementsByClassName("enlargeImage");
  var apples = document.getElementsByClassName("demo");
  var descriptionInfo = document.getElementById("description");
  
  for (i = 0; i < images.length; i++) {
      images[i].style.display= "none";
  }
  
  images[slideIndex-1].style.display= "block";
  apples[slideIndex-1].className= "active";
}
</script>

