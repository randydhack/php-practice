<?php

$items = [
    ["name" => "Harry Potter: Philosopher's Stone", "author" => "J.K Rowling", "release" => 1997, "url" => "google.com"],
    ["name" => "The Running Grave", "author" => "J.K Rowling", "release" => 2023, "url" => "google.com"],
    [
        "name" => "
        The Heaven & Earth Grocery Store",
        "author" => "James McBride",
        "release" => 2023,
        "url" => "google.com"
    ]
];

// function filter($items, $fn) {
//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         };
//     };

//     return $filteredItems;
// };

$filteredBooks = array_filter($items, function ($item) {
    return $item["release"] === 1997;
});


require "index.view.php"
?>
