<?php

$pdo = new PDO("mysql:host=127.0.0.1;dbname=mvc", "root", "mysql");
$pdo->exec('CREATE TABLE videos (id INTEGER PRIMARY KEY, url TEXT, title TEXT);');
