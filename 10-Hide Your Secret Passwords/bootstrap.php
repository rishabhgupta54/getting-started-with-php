<?php
require './Database/Connection.php';
require './Database/QueryBuilder.php';
$config = require './config.php';
return new QueryBuilder(Connection::make($config));