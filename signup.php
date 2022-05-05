<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
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
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="#">MODE</a></li>   
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

                <div class="form" id="signup">
                    <h2>SIGN UP</h2>
                    <!-- post:for safty&security -->
                    <form action="regproc.php" method="post">
                    <input type="name" name="username" placeholder="Enter Your Name Here">
                    <input type="password" name="password" placeholder="Enter Your Password Here">
                    <input type="password" name="repassword" placeholder="Re-Enter Your Password Here"> 
                    <input type="email" name="email" placeholder="Enter Your Email Here">
                     <input name="reg" type="submit"  value="Regist" class="cn">
                    </form>
                    <p class="link"> already have account?<br>
                    <a href="login.php">log in </a> here</a></p>
                   </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>