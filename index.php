<!DOCTYPE html>
<html>
<head>
    <title>Time and Date Display</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #000;
    text-align: center;
    margin: 0;
    padding: 0;
}

#container {
    background-color: #111;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    width: 90%;
}

h1 {
    font-size: 24px;
    color: #ccc;
    margin-top: 0;
}

.country-card {
    background-color: #ccc;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    margin-bottom: 60px;
    padding: 10px;
    height: 70vh;
    background-size: 40px auto; 
    background-repeat: no-repeat;
    background-position: 10px center; 
    padding-left: 60px; 
}

.country-name {
    font-size: 23px;
    margin-top: 7rem;
    color: #c70101;
}

.time-info {
    font-size: 50px;
    color: #fff;
    font-weight: 700;
}

@media (max-width: 410px) {
 .time-info {
    font-size: 50px;
    color: #fff;
    font-weight: 700;
    margin: 0;
}
}

    </style>
</head>
<body>
    <div id="container">
        <h1>Current Date and Time in Different Countries</h1>
        <div id="date_and_time">
            <?php
            $countries = [
                "United States" => ["timezone" => "America/New_York", "flag" => "ImageForArticle_3120(2).webp"],
                "United Kingdom" => ["timezone" => "Europe/London", "flag" => "bc16-uk-gallery-02.jpg"],
                "India" => ["timezone" => "Asia/Kolkata", "flag" => "pilgrims-ghat-Phalgu-River-Bihar-India-Gaya.webp"],
                "Japan" => ["timezone" => "Asia/Tokyo", "flag" => "unnamed.jpg"],
                "Australia" => ["timezone" => "Australia/Sydney", "flag" => "IMG_0148.JPG"],
            ];

            foreach ($countries as $country => $data) {
                echo '<div class="country-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(\'flags/' . $data["flag"] . '\');background-size:cover;">';
                echo '<h2 class="country-name">' . $country . '</h2>';
                echo '<p class="time-info" data-timezone="' . $data["timezone"] . '"> ' . date('Y-m-d H:i:s', strtotime("now $data[timezone]")) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <script src="java/java.js"></script>
</body>
</html>
