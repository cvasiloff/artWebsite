<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
    <?php
    echo "Calamity Annie | " . $title;
    ?>
</title>
<link href="styleVersion20.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/pageIcon.png" sizes="32x32" />
</head>



<body>
<div class="pageWrapper"><!--END ON FOOTER-->
    <center>
        <header>
            <img class="topLogo" src="images/logo.png"/>
        </header>
    </center>

<div class="navBack"></div>

    <nav>
        <ul>
            <div class="menuMobile" OnClick="showMenu">menu</div>
            <div class="revealThis">
                <li class="linkMobile"><a href="home.php">home</a></li>
                <li class="linkMobile"><a href="design.php">design</a></li>
                <li class="linkMobile"><a href="volunteer.php">volunteer work</a></li>
                <li class="linkMobile"><a href="illustration.php">illustration</a></li>
                <li class="linkMobile"><a href="portraiture.php">portraiture</a></li>
            </div>
            
        </ul>
    </nav>


<script>
var acc = document.getElementsByClassName("menuMobile");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("reveal");
    }
}
</script>

