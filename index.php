<html>
    <head>
        <meta charset="utf-8">
        <title>Bnshots.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css-reset.css">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="menu.js"></script>

       
    </head>
    <body>
	<?php
$kapcsolat=mysqli_connect("localhost","beci","pw");
mysqli_set_charset($kapcsolat,"utf8");
echo("good");
?>
      <nav>
        <div id = 'buttons-desktop1' class = "buttons-desktop">
        <ul>
          <li id ='button1'><a href='portfolio.html'>Portfólió </a></li>
          <li id ='button2'><a href='kliensek.html'>Kliensek</a></li>
        </ul>
        </div>
        <div class = "logo-desktop">
          <a href="index.html">
         <h2>BnShots</h2>        
          </a>
        </div>
        <div id = 'buttons-desktop2' class = "buttons-desktop">
        <ul>
          <li id='button3'><a href='rolam.html'>Rólam </a></li>
          <li id='button4'><a href='kapcsolat.html'>Kapcsolat</a></li>
        </ul>
        </div>        
        <div class = "logo">
        <a href="index.html">
         <h2>BnShots</h2>        
          </a>
        </div>
        <div class="nav-icon" onclick="myFunction(this)">
          <span class ='line1'></span>
          <span class ='line2'></span>
          <span class= 'line3'></span>
        </div>
        <div id = 'myLinks' class = "buttons">
        <ul>
          <li><a href='portfolio.html'>Portfólió </a></li>
          <li><a href='kliensek.html'>Kliensek</a></li>
          <li><a href='rolam.html'>Rólam</a></li>
          <li><a href='kapcsolat.html'>Kapcsolat</a></li>
        </ul>
        </div>
      </nav>
      <div class ='slideshowContainer'>
      <div id="first"  class = 'imageSlides'></div>
      <div id="second"  class = 'imageSlides'></div>
      <div id="third"  class = 'imageSlides'></div>
      <div id="fourth"  class = 'imageSlides'></div>
      <div id="fifth"  class = 'imageSlides'></div>
      <span id ="leftArrow" class="slideshowArrow">&#8249;</span>
      <span id ="rightArrow" class="slideshowArrow">&#8250;</span>
      <div class="slideshowCircles">
        <span class="circle dot"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>


      </div>

    </div>
   <script src="menu.js"></script>

   <script type = "text/javascript" src="index.js"></script>


    </body>
</html>

