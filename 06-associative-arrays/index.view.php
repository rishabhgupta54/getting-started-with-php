<html>
<head>
    <title>Arrays</title>
</head>
<body>
<ul>
    <?php
    foreach ($person as $key => $value):
        ?>
        <li><strong><?php echo $key; ?></strong> <?php echo $value; ?> </li>
        <?php
    endforeach;
    ?>
</ul>
</body>
</html>