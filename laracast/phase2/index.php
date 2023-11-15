<?php

require 'functions.php';
// require 'routers.php';
require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "select * from post where id = ?";

// $query = "select * from post where id = :id";
// $posts = $db->query($query, [':id' => $id])->fetch();

$posts = $db->query($query, [$id])->fetch();

dd($posts);
