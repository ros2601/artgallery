<?php
if(!empty($_REQUEST['search-btn']))
{
    $country=$_REQUEST['country-inp'];
    $finalURL=`https://restcountries.com/v3.1/name/${countryName}?fullText=true`;
    
    print_r($finalURL);
    mysqli_fetch_assoc();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Country Guide </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="search-wrapper">
            <input type="text" id="country-inp" placeholder="Enter a country name here..." />
            <button id="search-btn">Search</button>
        </div>
        <div id="result"></div>
    </div>
    <!-- Script -->
    <script src="script.js"></script>
</body>

</html>