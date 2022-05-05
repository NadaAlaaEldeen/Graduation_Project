<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="icon" href="eye-of-ra.png">
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <a href="intro.php"><img src="icon.png" class="icon"></a>
            <div class="logo"> 
                <p class="discover">Discover</br>
                <p >EGYPT</p>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="intro.php">HOME</a></li>
                    <li><a href="#">PLACES</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                    <li><a href="require'intro.php"onclick="mode('dark')">MODE</a></li>   
                    <a href="#"><img src="account.png" class="account"></a>

                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Learn more<br> about <span>Egypt</span></h1><br>
            <p class="par">We will help you get to know Egypt and its <br>governorate and see all its tourist places.
                        <br>We hope you will visit us and enjoy some charming views. 
                <br> We hope to see your interaction here and your opinion of these places.</p>

                <button class="cn"><a href="signup.php">JOIN US</a></button>

                <div class="form">
                    <h2>Login Here</h2>
                    <form action="logproc.php" method="post">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <input name="reg" type="submit"  value="Log In" class="cn">
                    </form>
                    <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>