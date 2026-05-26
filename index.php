<?php
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
$firstname = $_SESSION['firstname'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="css/misc/logo-icon.png">
    <title>SWERVE Sneaker Market</title>
</head>

<body>

    <div id="welcome-popup-bg">
        <div id="welcome-popup">
            <h3>Welcome To SWERVE</h3>
        </div>
    </div>

    <header>
        <div class="top-sect">
            <div class="nav-expand" onclick="togglePopup()">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="middle">

                <div class="logo">
                    <a href="index.php">SWERVE</a>
                </div>

                <div class="navbtns">

                    <div class="nav-links">
                        <?php if ($isLoggedIn): ?>
                            <span>Welcome, <?php echo htmlspecialchars($firstname); ?></span>
                            <a class="navbtns-each" href="logout.php">Logout</a>
                        <?php else: ?>
                            <a class="navbtns-each" href="login.php">Login</a>
                        <?php endif; ?>
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
        <div id="shoe-slider" style="background-image: url('css/img/sneaker-bg.jpg');">
            <div id="opacity-sheet">
                <h1>FIND. RENT. SWERVE</h1>
                <a href="sneakers.php">All sneakers</a>
            </div>
        </div>
        <div id="shoe-trending">
            <h2>Trending</h2>
            <div id="trending-overflow">
                <div id="trending-sneakers">
                    <p id="trending-loading">Loading trending sneakers...</p>
                </div>
            </div>
        </div>
        <div id="popular-brands">
            <div class="popular sport">
                <h2>Sport</h2>
                <div class="brand-icons">
                    <a href="sneakers.php?brand=nike"><img src="css/img/nike.png" alt=""></a>
                    <a href="sneakers.php?brand=vans"><img src="css/img/vans.png" alt=""></a>
                    <a href="sneakers.php?brand=burberry"><img src="css/img/adidas.png" alt=""></a>
                    <a href="sneakers.php?brand=under%20armour"><img src="css/img/underarmour.png" alt=""></a>
                    <a href="sneakers.php?brand=jordan"><img src="css/img/airjordan.png" alt=""></a>
                    <a href="sneakers.php?brand=new%20balance"><img src="css/img/newbalance.png" alt=""></a>
                </div>
            </div>
            <div class="popular luxury">
                <h2>Luxury</h2>
                <div class="brand-icons">
                    <a href="sneakers.php?brand=balenciaga"><img src="css/img/balenciaga.png" alt=""></a>
                    <a href="sneakers.php?brand=prada"><img src="css/img/prada.png" alt=""></a>
                    <a href="sneakers.php?brand=gucci"><img src="css/img/gucci.png" alt=""></a>
                    <a href="sneakers.php?brand=dior"><img src="css/img/dior.png" alt=""></a>
                    <a href="sneakers.php?brand=louis%20vuitton"><img src="css/img/louisvuitton.png" alt=""></a>
                    <a href="sneakers.php?brand=burberry"><img src="css/img/burberry.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <script src="function.js"></script>

</body>

<footer>
    <a href="about.html">About Us</a>
    <a href="termsconditions.html">Terms & Conditions</a>
    <a href="privacypolicy.html">Privacy & Policy</a>
    <a href="help.html">Help</a>
</footer>

</html>