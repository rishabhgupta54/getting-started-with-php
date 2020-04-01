<html>
    <head>
        <title>PHP & HTML</title>
    </head>
    <body>
        <?php
            $name = htmlspecialchars($_GET['name']);
        ?>
    <h1>Hello, <?php echo $name; ?></h1>
    </body>
</html>