<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCYT Flash Player</title>
    <style>
        p,
        li {
            font-size: 20px;
        }
        * {
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body {
            background: rgb(37, 39, 54);
        }
    </style>
</head>
<body>
    <p>long loading time, right click when it loads for full screen<br>Some games have links like submitting your score, or more games. Don't do this: it will delete your progress.</p>
    <?php echo "<embed style=\"margin:0;padding:0;\" src=\"/swf/".$_GET['game'].".swf\">"; ?>
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
</body>
</html>