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
                            <a class="navbtns-each" href="sneakers.html">Sneakers</a>
                            <a class="navbtns-each" href="blog.html">Blog</a>
                            <a class="navbtns-each" href="popular.html">Popular</a>
                            <a class="navbtns-each" href="about.html">About</a>
                            <a class="navbtns-each" href="contact.html">Contact Us</a>
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
                <a class="navbtns-each each1" onclick="sneakerNavBrandFetch(1)">ASICS</a>
                <a class="navbtns-each each2" onclick="sneakerNavBrandFetch(2)">ADIDAS</a>
                <a class="navbtns-each each3" onclick="sneakerNavBrandFetch(3)">AIR JORDAN</a>
                <a class="navbtns-each each4" onclick="sneakerNavBrandFetch(4)">ALEXANDER MCQUEEN</a>
                <a class="navbtns-each each5" onclick="sneakerNavBrandFetch(5)">BAIT</a>
                <a class="navbtns-each each6" onclick="sneakerNavBrandFetch(6)">BALENCIAGA</a>
                <a class="navbtns-each each7" onclick="sneakerNavBrandFetch(7)">BURBERRY</a>
                <a class="navbtns-each each8" onclick="sneakerNavBrandFetch(8)">CHANEL</a>
                <a class="navbtns-each each9" onclick="sneakerNavBrandFetch(9)">COMMON PROJECTS</a>
                <a class="navbtns-each each10" onclick="sneakerNavBrandFetch(10)">CONVERSE</a>
                <a class="navbtns-each each11" onclick="sneakerNavBrandFetch(11)">CROCS</a>
                <a class="navbtns-each each12" onclick="sneakerNavBrandFetch(12)">DIADORA</a>
                <a class="navbtns-each each13" onclick="sneakerNavBrandFetch(13)">DIOR</a>
                <a class="navbtns-each each14" onclick="sneakerNavBrandFetch(14)">GUCCI</a>
                <a class="navbtns-each each15" onclick="sneakerNavBrandFetch(15)">JORDAN</a>
                <a class="navbtns-each each16" onclick="sneakerNavBrandFetch(16)">LI NING</a>
                <a class="navbtns-each each17" onclick="sneakerNavBrandFetch(17)">LOUIS VUITTON</a>
                <a class="navbtns-each each18" onclick="sneakerNavBrandFetch(18)">NEW BALANCE</a>
                <a class="navbtns-each each19" onclick="sneakerNavBrandFetch(19)">NIKE</a>
                <a class="navbtns-each each20" onclick="sneakerNavBrandFetch(20)">OFF WHITE</a>
                <a class="navbtns-each each21" onclick="sneakerNavBrandFetch(21)">OTHER</a>
                <a class="navbtns-each each22" onclick="sneakerNavBrandFetch(22)">PRADA</a>
                <a class="navbtns-each each23" onclick="sneakerNavBrandFetch(23)">PUMA</a>
                <a class="navbtns-each each24" onclick="sneakerNavBrandFetch(24)">REEBOK</a>
                <a class="navbtns-each each25" onclick="sneakerNavBrandFetch(25)">SAINT LAURENT</a>
                <a class="navbtns-each each26" onclick="sneakerNavBrandFetch(26)">SAUCONY</a>
                <a class="navbtns-each each27" onclick="sneakerNavBrandFetch(27)">UNDER ARMOUR</a>
                <a class="navbtns-each each28" onclick="sneakerNavBrandFetch(28)">VANS</a>
                <a class="navbtns-each each29" onclick="sneakerNavBrandFetch(29)">VERSACE</a>
                <a class="navbtns-each each30" onclick="sneakerNavBrandFetch(30)">YEEZY</a>
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
    </body>
</html>