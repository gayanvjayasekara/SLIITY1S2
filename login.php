<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Vehicle Insurance Management System</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img class="i1" src="carlogo1.png">
            </div>
            <div class="menu">
                <ul>
                <li class="n1"><a href="index.html">HOME</a></li>
                    <li class="n1"><a href="getinsurance.html">INSURANCE</a></li>
                    <li class="n1"><a href="claim.html">CLAIMS</a></li>
                    <li class="n1"><a href="contactus/contactus.php">CONTACTUS</a></li>
                    <li class="n1"><a href="Thirdpartycover.php">THIRDPARTY</a></li>
                    <li class="n1"><a href="privacypolicy.html">POLICIES</a></li>
                    <li class="n1"><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
            <a href="contactus/User.php"><img class="i2" src="userlogo.png"></a>
        </div>
    </div><br><br><br><br><br><br>
    
    <form class="form1" action="loginread.php" method="post">
        <div class="content1">
            <h1 class="login">Log in</h1>
            <input class="c1" type="text" placeholder="Username" name="U_name" required><br>
            <input class="c1" type="password" placeholder="Password" name="Password" required><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                <span class="Password"> <a href="#">Forgot my password?</a></span>
            </label>
            <br><button class="btn5" name="submit" type="submit">Log in</button>
            <h5 clss="h5">Still don't have an account?</h5>
            <button class="btn6" onclick="location.href='signup.php'">Sign Up</button>
        </div>
    </form>

    <footer>
        <div class="container2">
            <div class="background3">
                <form action="https://www.google.com/search" method="get" class="searchbar">
                    <input type="text" placeholder="Search hear........" name="q">
                    <button class="btn4" type="submit"><img src="searchimage.png"></button>
                </form>
                <div id="f1">
                    <div class="container3">
                        <div class="footer-content">
                            <p>News & Updates</p>
                            <p>Privacy policy</p>
                            <p>Terms & Conditions</p>
                            <p>Safety</p>
                        </div>
                    </div>
                    <div class="container3">
                        <div class="footer-content">
                            <h2 style="margin-top: 20%;">Secure Payment Online</h2>
                            <ul class="cash-logo">
                                <li><img src="visa.png"></li>
                                <li><img src="master.png"></li>
                                <li><img src="ez.png"></li>
                                <li><img src="mcash.png"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container3">
                        <div class="footer-content">
                            <h2>Contact With Us</h2>
                            <ul class="weblogo">
                                <i class="fa-brands fa-square-facebook fa-2xl" style="color: #d6d6d6;"></i>
                                <i class="fa-brands fa-linkedin fa-2xl" style="color: #d6d6d6;"></i></ul><ul class="weblogo">
                                <i class="fa-brands fa-square-twitter fa-2xl" style="color: #d6d6d6;"></i>
                                <i class="fa-brands fa-square-instagram fa-2xl" style="color: #d6d6d6;"></i>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>