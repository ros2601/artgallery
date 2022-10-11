if(isset($_GET['location'])){
    require_once './php/display_weather.php';
    $weather = new Display_Weather($_GET['location'], "c"); 
}

<div class="weather_location">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <p><label for="location"><input type="text" id="location" name="location" placeholder="Enter your location" /></label></p>
        <input type="submit" value="Submit" name="submit" />
    </form>
    <hr/>
</div>

<?php if(isset($_GET['location']) && $_GET['location'] != ""){  
    
    $weather->displayCurrentWeather(); 
    
    $weather->displayFutureWeather();

} ?>