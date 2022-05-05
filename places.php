<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discover Egypt</title>
    <link rel="stylesheet" href="page.css" >
</head>

<body id="places">
    
    <div>
        <div class="left">
            <ul>
            <li> <img src="images/home.png" class="icon"> <a href="intro.html">Home</a> </li>
            <li>  <a href="#">Places</a></li>
            <li> <img src="icon/star.png" class="icon"> <a href="#">Favourites</a></li>
            <li> <img src="icon/comment.png" class="icon"> <a href="#">Comments</a></li>
            <li> <img src="icon/reviews.png" class="icon"> <a href="#">Testimonials</a></li>
            </ul>
        </div>
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
           "RedSea"
        );
        foreach($cites as $c){
       echo" <div class='card' style='background-image: url(" ."places/" . "$c.jpg" . ")'>/";
           echo "<div class='content' >";
           echo"<h2 class='title'>" .  $c  . "</h2>
                <a href='#' class='btn'> See More </a>
            </div>
        </div>";
           }
          ?>
      </div>
    
</body>
</html>