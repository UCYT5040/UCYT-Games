<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCYT Flash Player</title>
</head>
<body>
    <p>long loading time, right click when it loads for full screen</p>
    <?php echo "<embed style=\"margin:0;padding:0;\" src=\"/swf/".$_GET['game'].".swf\">"; ?>
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
</body>
</html>