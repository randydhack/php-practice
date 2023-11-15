<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "My Notes";
$currentUserId = 1;

$note = $db->query('select * from notes where id = :id',[
    'id'=> $_GET['id']
])->findOrFail();

authorized($note['user_id'] === $currentUserId);

require "views/note.view.php";
