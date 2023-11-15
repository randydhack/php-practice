<?php

require('Validator.php');
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Create Notes";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body no more than 1000 character is required";
    }


    if (empty($errors)) {
        $db->query(
            "INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
                'body' => $_POST['body'],
                'user_id' => 1,
            ],
        );
    }

}

require 'views/note-create.view.php';
