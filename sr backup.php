<?php
$id = $_GET['id'];
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://v1-sneakers.p.rapidapi.com/v1/sneakers/".$id,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: v1-sneakers.p.rapidapi.com",
		"X-RapidAPI-Key: 0c5f163fbdmsh0f89bb984b119d0p1c275bjsn59513d56caf8"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$result = json_decode($response);
curl_close($curl);
$finalresults = $result->results[0]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sneakers-redirect.css">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="css/misc/logo-icon.png">
    <title><?php echo $finalresults->name ?> - SWERVE</title>
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

        <div class="section2">
            <div class="sneaker-image front-image" style="background-image:url('<?php echo $finalresults->media->imageUrl ?>');">
            </div>
            <div class="sneaker-info-container">
                <div class="sneaker-everything">
                    <div class="sneaker-primary">
                        <div class="sneaker-data d1">
                            <div class="sn sneaker-brand">
                                <h1><?php echo $finalresults->brand ?></h1>
                            </div>
                            <div class="sn sneaker-name">
                                <h2><?php echo $finalresults->name ?></h2>
                            </div>
                            <div class="sn sneaker-price">
                                <h3>$<?php echo $finalresults->retailPrice ?></h3>
                            </div>
                            <div class="sn sneaker-desc">
                                Shatter the sneaker status quo in the Jordan MA2. Made from a mix of suede, full-grain leather and a variety of textiles, it's got unconventional labels, technical micro-graphics and raw foam edges for a balance of new and classic. Easy to get on and off, it looks good with just about anything.
                                Shatter the sneaker status quo in the Jordan MA2. Made from a mix of suede, full-grain leather and a variety of textiles, it's got unconventional labels, technical micro-graphics and raw foam edges for a balance of new and classic. Easy to get on and off, it looks good with just about anything.
                            </div>
                        </div>
                        <div class="sneaker-data d2">
                            <a href="cart.html"><img src="css/misc/cart.png" class="icon">Add to basket</a>
                            <a><img src="css/misc/purchase.png" class="icon">Purchase</a>
                            <a id="rentbutton"><img src="css/misc/rent.png" class="icon">Rent</a>
                        </div>
                    </div>
                    <div class="customer-review">
                        <h2>Reviews</h2>
                        <a id="review-button"><button onclick="reviewPopup()" id="review-button"><img src="css/misc/write-review.png" class="icon">Write a review</button></a>
                    </div>
                </div>
            </div>
            <div class="write-review-popup">
                <button onclick="reviewPopup()" id="close-review-btn">Close</button>
                <div class="sneaker-review">
                    <div class="sub-div1">
                        <div class="sneaker-quick-details">
                            <div class="sneaker-image review-image" style="background-image:url('<?php echo $finalresults->media->thumbUrl ?>');">
                            </div>
                            <div class="sneaker-brand">
                            <h1><?php echo $finalresults->brand ?></h1>
                            </div>
                            <div class="sneaker-name">
                                <h2><?php echo $finalresults->name ?></h2>
                            </div>
                            <div class="sneaker-price">
                                <h3>$<?php echo $finalresults->retailPrice ?></h3>
                            </div>
                        </div>
                        <form action="reviews.php?id=".$id method="post">
                            <div class="sub-div1-1">
                                <?php 
                                if(isset($_GET["error"])) {
                                    $error = $_GET["error"];
                                    echo '<div class="form-input-error" id="review-empty">'.$error.'</div>';
                                }
                                ?>
                                <div class="rating">
                                    <div class="rating-type">
                                        <h3>Quality</h3>
                                        <label>
                                            <input type="radio" id="quality1" name="quality" value="1" />
                                            <img src="css/misc/rating/quality.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="quality2" name="quality" value="2" />
                                            <img src="css/misc/rating/quality.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="quality3" name="quality" value="3" />
                                            <img src="css/misc/rating/quality.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="quality4" name="quality" value="4" />
                                            <img src="css/misc/rating/quality.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="quality5" name="quality" value="5" />
                                            <img src="css/misc/rating/quality.png" alt="">
                                        </label>
                                    </div>
                                    <div class="rating-type">
                                        <h3>Comfortability</h3>
                                        <label>
                                            <input type="radio" id="comfort1" name="comfort" value="1" />
                                            <img src="css/misc/rating/comfort.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="comfort2" name="comfort" value="2" />
                                            <img src="css/misc/rating/comfort.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="comfort3" name="comfort" value="3" />
                                            <img src="css/misc/rating/comfort.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="comfort4" name="comfort" value="4" />
                                            <img src="css/misc/rating/comfort.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="comfort5" name="comfort" value="5" />
                                            <img src="css/misc/rating/comfort.png" alt="">
                                        </label>
                                    </div>
                                    <div class="rating-type">
                                        <h3>Aesthetics</h3>
                                        <label>
                                            <input type="radio" id="aesthetics1" name="aesthetics" value="1" />
                                            <img src="css/misc/rating/aesthetics.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="aesthetics2" name="aesthetics" value="2" />
                                            <img src="css/misc/rating/aesthetics.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="aesthetics3" name="aesthetics" value="3" />
                                            <img src="css/misc/rating/aesthetics.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="aesthetics4" name="aesthetics" value="4" />
                                            <img src="css/misc/rating/aesthetics.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="aesthetics5" name="aesthetics" value="5" />
                                            <img src="css/misc/rating/aesthetics.png" alt="">
                                        </label>
                                    </div>
                                    <div class="rating-type">
                                        <h3>Overall</h3>
                                        <label>
                                            <input type="radio" id="overall1" name="overall" value="1" />
                                            <img src="css/misc/rating/overall.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="overall2" name="overall" value="2" />
                                            <img src="css/misc/rating/overall.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="overall3" name="overall" value="3" />
                                            <img src="css/misc/rating/overall.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="overall4" name="overall" value="4" />
                                            <img src="css/misc/rating/overall.png" alt="">
                                        </label>
                                        <label>
                                            <input type="radio" id="overall5" name="overall" value="5" />
                                            <img src="css/misc/rating/overall.png" alt="">
                                        </label>
                                    </div>
                                    <input id="shoeId" value="<?php echo $id ?>" name="shoeId"/>
                                </div>
                                <textarea name="review" id="review-box" placeholder="Write your review.."></textarea>
                                <button id="review-submit" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        if(isset($_GET["status"])) {
            $status = $_GET["status"];
            echo '<div class="review-submit-confirmation"><button onclick="closeStatusMsg()" id="close-review-btn">CLOSE</button><div class="status-container">'.$status.'</div></div>';
        }
        ?>

        <script src="sneakers-redirect.js"></script>
    </body>

<footer>
    <a href="about.html">About Us</a>
    <a href="termsconditions.html">Terms & Conditions</a>
    <a href="privacypolicy.html">Privacy & Policy</a>
    <a href="contact.html">Contact Us</a>
</footer>

</html>