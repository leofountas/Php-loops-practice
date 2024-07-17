<?php 
$cities = ['Rome','Paris','London','Berlin','New York','Tokyo'];
?>

<html>
    <head></head>
    <body>
        <form>
            <label for="city">Please select a city</label>
            <select name="city" id="city">
                <?php
                    foreach($cities as $city){
                        echo '<option value="' .$city. '">' .$city. '</option>';
                    }
                ?>
            </select>
            <input type="submit" value="confirm">
        </form>
    </body>
</html>