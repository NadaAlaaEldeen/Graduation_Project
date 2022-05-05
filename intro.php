<!DOCTYPE html>
<html>
<head>
    <title>Discover Egypt</title>
    <link rel="icon" href="eye-of-ra.png">
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="places.css">
    </head>

<body onload="loadCSS()">
    <header>
        <div class="logo"> 
            <img src="icon.png" class="icon"> 
            <div> 
                <p class="discover">Discover</p>
                <p class="egypt">EGYPT</p>
            </div>
        </div>
        <ul>
            <li><a href="intro.html">HOME</a></li>
            <li><a href="#places">Places</a></li>
            <li><a href="#">
                More
                <!-- <select>
                  <option> <li><a href="#">Banknotes&Coins</a></li></option>
                  <option> <li><a href="#">information</a></li></option>
                  <option> <li><a href="#">Procession of the royal mummies</a></li></option>
                </select> -->
            </a></li>
            <li><a href="#">Contact</a></li>
            <li><a href=""onclick="<?php mode('dark') ?>">mode</a></li> 
            <li><a href="login.php">log in</a></li> 
            <a href="#"><img src="account.png" class="account"></a>
        </ul>
    </header>

    <section>
    <?php
          mode("light");
     function mode($x){
       echo "<img src=" .  $x . "/stars.png id='stars' alt=''>";
       echo "<img src=" .  $x . "/moon.png id='moon' alt=''>";
       echo "<img src=" .  $x.  "/mountain.png id='mountain' alt=''>";
       echo "<img src=" . $x .  "/mountain-back.png id='mountain-back' alt=''>";
       echo "<img src=" . $x . "/mountain-front.png id='mountain-front' alt=''>";
       return(0);  
      } 
      ?>
        <a href="#" id="btn">DISCOVER</a>
        <h2 id="text">EGYPT</h2>
    </section>
    <div id="places">
    <?php
        $cites=array(
            "Alexandria",
            "Aswan",
            "Asyut",
            "Beheira",
            "BeniSuef",
            "Cairo",
            "Dakahlia",
            "Damietta",
            "Fayoum",
            "Gharbia",
            "Giza",
            "Ismailia",
            "KafrElSheikh",
            "Luxor",
           "Matroh",
           "Minya",
           "Monufia",
          "NewValley",
           "NorthSinai",
          "PortSaid",
           "Qalyubia",
           "Qena",
           "RedSea",
           "Sharqia",
           "Sohag",
           "SouthSinai",
           "Suez",
           "Map"
        );
        foreach($cites as $c){
       echo" <div class='card' style='background-image: url(" ."places/" . "$c.jpg" . ")'>";
           echo "<div class='content' >";
           echo"<h2 class='title'>" .  $c  . "</h2>
                <a href='$c/$c.php' class='btn'> See More </a>
            </div>
        </div>";
           }
          ?>
      </div>
    
</body>

<script>
    function loadCSS() {
        var sheet = document.createElement('style');
        sheet.innerHTML = 
        "header {transform: translateY(0px); opacity: 1; transition: transform 1.5s ease-in, opacity 2s ease-in;}\n"
      + "section img#moon {transition: width 1.5s ease-in, height 1.5s ease-in, margin-left 1.5s ease-in; width: 100%; height: 100%; margin-left: 0px;}\n"
      + "section img#stars {transform: translateY(0px); transition: transform 1.5s ease-in;}\n"
      + "section #btn {transform: translateY(-67px); opacity: 1; transition: transform 1.5s ease-in, opacity 2s ease-in;}\n"
      + "section img#mountain {transform: translateY(0px); transition: transform 1.5s ease-in;}\n"
      + "section #text {transform: translateY(90px); transition: transform 1.5s ease-in;}\n"
      + "section img#mountain-front {transition: margin-top 1.5s ease-in; margin-top: 0px;}";
        document.body.appendChild(sheet);
    }
</script>
</html>