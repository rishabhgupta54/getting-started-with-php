<?php
    require_once 'Task.php';
?>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
<ul>
    <?php
        foreach ($tasks as $key => $task):
            ?>
            <li style="<?php echo $task->isComplete() ? 'text-decoration: line-through;' : ''; ?>">
                <?php echo $task->description(); ?>
            </li>
            <?php
        endforeach;
    ?>
</ul>
</body>
</html>