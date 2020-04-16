<?php
    require 'Class/Todos.php';
    $query = require 'bootstrap.php';
    $tasks = $query->selectAll('todos','Todos');

    echo '<pre>';
    print_r($tasks);
    echo '</pre>';
