<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <p>Count: {{$count->times_pressed}}</p>
    <p>Led state: {{$led->led_is_on}}</p>
    <a href="toggle_led">Toggle Led</a>
</body>
</html>