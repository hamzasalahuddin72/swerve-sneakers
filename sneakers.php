<?php
session_start();

$config = require __DIR__ . '/config/config.php';

$brand = trim($_GET['brand'] ?? '');
$prefix = $brand !== '' ? $brand : 'All';

$queryParams = [
    'limit' => 40
];

if ($brand !== '') {
    $queryParams['brand'] = $brand;
}

$url = 'https://v1-sneakers.p.rapidapi.com/v1/sneakers?' . http_build_query($queryParams);

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: " . $config['rapidapi_host'],
        "X-RapidAPI-Key: " . $config['rapidapi_key']
    ],
]);

$response = curl_exec($curl);
$curlError = curl_error($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

$result = json_decode($response, true);

$apiError = "";
$sneakers = [];

if ($curlError) {
    $apiError = "Unable to connect to the sneaker API right now.";
} else if ($httpCode !== 200) {
    $apiError = "Unable to load sneakers right now. API returned HTTP status " . $httpCode . ".";
} else if (!isset($result['results']) || !is_array($result['results'])) {
    $apiError = "Sneaker data could not be read from the API response.";
} else {
    $sneakers = $result['results'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sneakers.css">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="css/misc/logo-icon.png">
    <title><?php echo ucwords($prefix) ?> Sneakers - SWERVE</title>
</head>

<body class="sneakers-page">

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

    <main class="section" id="sneaker-catalogue">
        <?php
        if ($apiError !== "") {
            echo '<p class="catalogue-message">' . htmlspecialchars($apiError, ENT_QUOTES, 'UTF-8') . '</p>';
        } else if (empty($sneakers)) {
            echo '<p class="catalogue-message">No sneakers found for this selection.</p>';
        } else {
            foreach ($sneakers as $res) {
                $id = htmlspecialchars($res['id'] ?? '', ENT_QUOTES, 'UTF-8');
                $brandName = htmlspecialchars($res['brand'] ?? 'Unknown Brand', ENT_QUOTES, 'UTF-8');
                $sneakerName = htmlspecialchars($res['name'] ?? $res['title'] ?? 'Sneaker', ENT_QUOTES, 'UTF-8');
                $price = htmlspecialchars((string) ($res['retailPrice'] ?? 'N/A'), ENT_QUOTES, 'UTF-8');

                $imageUrl = $res['media']['smallImageUrl']
                    ?? $res['media']['imageUrl']
                    ?? $res['media']['thumbUrl']
                    ?? '';

                if (empty($imageUrl)) {
                    continue;
                }

                $imageUrl = htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8');

                echo '
        <div class="div">
            <a href="sneakers-redirect.php?id=' . $id . '" class="image-frame" style="background-image: url(\'' . $imageUrl . '\')"></a>
            <div class="sneaker-details">
                <div class="sneaker-title">
                    <div class="sneaker-brand">
                        <h4>' . $brandName . '</h4>
                    </div>
                    <div class="sneaker-name">
                        <h5>' . $sneakerName . '</h5>
                    </div>
                </div>
                <div class="sneaker-price">
                    <h3>$' . $price . '</h3>
                </div>
            </div>
        </div>
        ';
            }
        }
        ?>
    </main>

    <script src="function.js"></script>

    <footer>
        <a href="about.html">About Us</a>
        <a href="termsconditions.html">Terms & Conditions</a>
        <a href="privacypolicy.html">Privacy & Policy</a>
        <a href="help.html">Help</a>
    </footer>
</body>

</html>