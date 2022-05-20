<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="css/misc/logo-icon.png">
    <title>SWERVE Login</title>
</head>
    
    <body>

        <header>
            <div class="top-sect">
                <div class="nav-expand" onclick="togglePopup()">
                <i class="fa-solid fa-bars"></i>
                </div>
                <div class="middle">

                    <div class="logo">
                        <a href="index.html">SWERVE</a>
                    </div>

                    <div class="navbtns">
                        
                        <div class="nav-links">
                            <a class="navbtns-each" href="login.php">Log In</a>
                            <a class="navbtns-each" href="sneakers.php">Sneakers</a>
                            <!-- <a class="navbtns-each" href="blog.html">Blog</a>
                            <a class="navbtns-each" href="popular.html">Popular</a> -->
                            <a class="navbtns-each" href="about.html">About Us</a>
                            <a class="navbtns-each" href="help.html">Help</a>
                        </div>

                        <div class="search-btn-field">
                            <input placeholder="Search sneakers" id="search-input" type="text">
                            <div class="nav-search" onclick="toggleInput()">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>

                    </div>
                    
                </div>

                    <div class="collapse-navbtn" onclick="collapseNavbtns()">
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    
            </div>
            
            <div class="scroll-indicator">
            </div>

        </header>

        <div class="nav-popup">
            <div class="popup-content">
                <a href="sneakers.php?brand=asics" class="navbtns-each">ASICS</a>
                <a href="sneakers.php?brand=adidas" class="navbtns-each">ADIDAS</a>
                <a href="sneakers.php?brand=jordan" class="navbtns-each">AIR JORDAN</a>
                <a href="sneakers.php?brand=alexander%20mcqueen" class="navbtns-each">ALEXANDER MCQUEEN</a>
                <a href="sneakers.php?brand=bait" class="navbtns-each">BAIT</a>
                <a href="sneakers.php?brand=balenciaga" class="navbtns-each">BALENCIAGA</a>
                <a href="sneakers.php?brand=burberry" class="navbtns-each">BURBERRY</a>
                <a href="sneakers.php?brand=chanel" class="navbtns-each">CHANEL</a>
                <a href="sneakers.php?brand=common%20projects" class="navbtns-each">COMMON PROJECTS</a>
                <a href="sneakers.php?brand=converse" class="navbtns-each">CONVERSE</a>
                <a href="sneakers.php?brand=crocs" class="navbtns-each">CROCS</a>
                <a href="sneakers.php?brand=diadora" class="navbtns-each">DIADORA</a>
                <a href="sneakers.php?brand=dior" class="navbtns-each">DIOR</a>
                <a href="sneakers.php?brand=gucci" class="navbtns-each">GUCCI</a>
                <a href="sneakers.php?brand=jordan" class="navbtns-each">JORDAN</a>
                <a href="sneakers.php?brand=li%20ning" class="navbtns-each">LI NING</a>
                <a href="sneakers.php?brand=louis%20vuitton" class="navbtns-each">LOUIS VUITTON</a>
                <a href="sneakers.php?brand=new%20balance" class="navbtns-each">NEW BALANCE</a>
                <a href="sneakers.php?brand=nike" class="navbtns-each">NIKE</a>
                <a href="sneakers.php?brand=off%20white" class="navbtns-each">OFF WHITE</a>
                <a href="sneakers.php?brand=other" class="navbtns-each">OTHER</a>
                <a href="sneakers.php?brand=prada" class="navbtns-each">PRADA</a>
                <a href="sneakers.php?brand=puma" class="navbtns-each">PUMA</a>
                <a href="sneakers.php?brand=reebok" class="navbtns-each">REEBOK</a>
                <a href="sneakers.php?brand=saint%20laurent" class="navbtns-each">SAINT LAURENT</a>
                <a href="sneakers.php?brand=saucony" class="navbtns-each">SAUCONY</a>
                <a href="sneakers.php?brand=under%20armour" class="navbtns-each">UNDER ARMOUR</a>
                <a href="sneakers.php?brand=vans" class="navbtns-each">VANS</a>
                <a href="sneakers.php?brand=versace" class="navbtns-each">VERSACE</a>
                <a href="sneakers.php?brand=yeezy" class="navbtns-each">YEEZY</a>
                <br><br><br><br><br><br><br>
            </div>
        </div>

        <div class="section">
            <form class="form" id="form" action="userlogin.php" method="post">
                <h1>Login</h1>
                    <?php
                        if(isset($_GET['error'])) {
                            $accountNotRegistered = $_GET['error'];
                            echo '<div class="form-input-error" id="top-error">'.$accountNotRegistered.'</div>';
                        }
                    ?>
                <div class="form-interaction">
                    <div class="form-element-group">
                        <?php
                            if(isset($_GET["username"])) {
                                $username = $_GET["username"];
                                echo '<input autofocus type="text" name="username" id="username" class="form-input" placeholder="Username/Email" value="'.$username.'">';
                            } else {
                                echo '<input autofocus type="text" name="username" id="username" class="form-input" placeholder="Username/Email">';
                            }
                        ?>
                        <?php if(isset($_GET["fieldsError"])) {
                            $allEmpty = $_GET["fieldsError"];
                            echo '<div class="form-input-error" id="username-empty">'.$allEmpty.'</div>';
                        }
                        ?>
                        <?php if(isset($_GET["usernameError"])) {
                            $usernameEmpty = $_GET["usernameError"];
                            echo '<div class="form-input-error" id="username-empty">'.$usernameEmpty.'</div>';
                        }
                        ?>
                    </div>
                    <div class="form-element-group">
                        <input type="text" name="password" id="password" class="form-input" placeholder="Password">
                        <?php if(isset($_GET["passwordError"])) {
                            $passwordEmpty = $_GET["passwordError"];
                            echo '<div class="form-input-error" id="password-empty">'.$passwordEmpty.'</div>';
                        }
                        ?>
                        <?php if(isset($_GET["pwCondition1"], $_GET["pwCondition2"], $_GET["pwCondition3"], $_GET["pwCondition4"])) {
                            $pwCondition1 = $_GET["pwCondition1"];
                            $pwCondition2 = $_GET["pwCondition2"];
                            $pwCondition3 = $_GET["pwCondition3"];
                            $pwCondition4 = $_GET["pwCondition4"];
                            echo '<div class="form-input-error" id="password-conditions">
                            <a class="messages" id="p-msg1">'.$pwCondition1.'</a>
                            <br>
                            <a class="messages" id="p-msg2">'.$pwCondition2.'</a>
                            <br>
                            <a class="messages" id="p-msg3">'.$pwCondition3.'</a>
                            <br>
                            <a class="messages" id="p-msg4">'.$pwCondition4.'<br>@ $ * . & _</a>
                            </div>';
                        }
                        ?>
                    </div>
                    <button class="form-button" type="submit">Continue</button>
                    <p class="form-help">
                        <a href="forgotpassword.php" class="form-help-link">Forgot your password?</a>
                    </p>
                    <p class="form-help">
                        <a href="signup.php" class="form-help-link" id="create-account">Don't have an account?<br> Create account</a>
                    </p>
                </div>
            </form>
        </div>
        
        <script src="function.js"></script>
        <script src="login.js"></script>
    </body>

<footer>
    <a href="about.html">About Us</a>
    <a href="termsconditions.html">Terms & Conditions</a>
    <a href="privacypolicy.html">Privacy & Policy</a>
    <a href="help.html">Help</a>
</footer>
</html>