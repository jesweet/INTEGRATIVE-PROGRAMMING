<?php
$weatherConditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Conditions</title>
    <style>
        body {
            background-color: pink;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: darkred;
            margin-top: 50px;
        }
        .output-box {
            background-color: white;
            border: 2px solid #333;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Weather Conditions This Month</h1>

    <div class="output-box">
        <p>
            We've seen all kinds of weather this month. At the beginning of the month, we had <?php echo $weatherConditions[5]; ?> and <?php echo $weatherConditions[6]; ?>.
            Then came <?php echo $weatherConditions[1]; ?> with a few <?php echo $weatherConditions[2]; ?> and some <?php echo $weatherConditions[0]; ?>.
            At least we didn't get any <?php echo $weatherConditions[3]; ?> or <?php echo $weatherConditions[4]; ?>.
        </p>
    </div>
</body>
</html>