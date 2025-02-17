<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Cities Array</title>
    <style>
        body {
            background-color: #ffc0cb;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            background-color: white;
            border: 2px solid #ff69b4;
            border-radius: 15px;
            padding: 20px;
            margin: 20px auto;
            width: 60%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            color: #ff1493;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 8px;
            border-bottom: 1px solid #ffb6c1;
        }
    </style>
</head>
<body>
    <h2>Largest Cities</h2>

    <?php
        
        $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

        
        echo '<div class="container">';
        echo '<h3>Initial Cities</h3>';
        echo '<p>' . implode(", ", $cities) . '</p>';
        echo '</div>';

      
        sort($cities);
        echo '<div class="container">';
        echo '<h3>Sorted Cities</h3><ul>';
        foreach ($cities as $city) {
            echo '<li>' . htmlspecialchars($city) . '</li>';
        }
        echo '</ul></div>';

       
        $newCities = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
        $cities = array_merge($cities, $newCities);
        sort($cities);

        
        echo '<div class="container">';
        echo '<h3>Final Sorted Cities</h3><ul>';
        foreach ($cities as $city) {
            echo '<li>' . htmlspecialchars($city) . '</li>';
        }
        echo '</ul></div>';
    ?>
</body>
</html>