<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = isset($_POST["temperature"]) ? floatval($_POST["temperature"]) : 0;
    $unit = isset($_POST["unit"]) ? $_POST["unit"] : "";

    if ($unit === "celsius") {
        $convertedTemperature = ($temperature * 9/5) + 32;
        $convertedUnit = "Fahrenheit";
    } elseif ($unit === "fahrenheit") {
        $convertedTemperature = ($temperature - 32) * 5/9;
        $convertedUnit = "Celsius";
    } else {
        echo "Invalid unit selection.";
        exit();
    }

    echo "Converted temperature: $convertedTemperature $convertedUnit.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>

<form action="" method="post">
    <label for="temperature">Enter temperature:</label>
    <input type="number" step="any" id="temperature" name="temperature" required>

    <label for="unit">Select unit:</label>
    <select id="unit" name="unit" required>
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
    </select>

    <input type="submit" value="Convert">
</form>

</body>
</html>