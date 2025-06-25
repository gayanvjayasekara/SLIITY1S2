<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
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
                    <li class="n1"><a href="Thirdpartycover.ph#">THIRDPARTY</a></li>
                    <li class="n1"><a href="privacypoplicy.html">POLICIES</a></li>
                    <li class="n1"><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
            <a href="contactus/User.php"><img class="i2" src="userlogo.png"></a>
        </div>
    </div><br><br><br><br><br><br>

    <form action="signupinsert.php" method="post">
        <div class="container">
    
        <h2>Create Your Account</h2>
        <div class="section">
            <div class="section-content">
            <div class="half-width">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="half-width">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            </div>       

                <label for="username">User Name</label>
                <input type="text" id="username" name="username" required>

                <label for="email">E-mail Address</label>
                <input type="email" id="email" name="email" required>

                
                <label for="country">Country/Region</label>
                <select id="country" name="country" >
                    <option value="">Srilanka</option>
                    <option value="">India</option>
                    <option value="">Pakisthan</option>
                    <option value="">Bangaladesh</option>
                </select> 
                <div class="section-content">
                    <div class="half-width">
                        <label for="countrycode">Country code</label>
                        <input type="text" id="country_c" name="countrycode" required>
                    </div>
                    <div class="half-width">
                        <label for="phone">Mobile number</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                </div>
    </div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="current-password"><br>
                    <label for="confirmPassword">Confirm Password:</label>
                   <input type="password" id="confirmPassword" name="confirmPassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="current-password">
            <br><br>
            <center>
                <input type="submit"  name="submit" value="CREATE ACCOUNT" class="submitBtn" >
            </center>
 </div>
 <br>
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