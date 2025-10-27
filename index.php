<?php
require_once __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Load templates from /templates
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

// Determine the page to load
$page = $_GET['page'] ?? 'landing';

// Only allow specific pages
$validPages = ['landing', 'login', 'signup', 'dashboard', 'tickets'];

if (!in_array($page, $validPages)) {
  $page = 'landing';
}

// Render the page
echo $twig->render("{$page}.twig");
