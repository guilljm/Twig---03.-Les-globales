<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once 'products.php';

$name = 'Wilder';

$persons = [
    ['name' => 'riri', 'age' => 10],
    ['name' => 'fifi', 'age' => 20],
    ['name' => 'loulou', 'age' => 30],
];

echo $twig->render('index.html.twig', ['products' => $products]);
echo $twig->render('details.html.twig', ['name' => $name]);
