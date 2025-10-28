<?php
session_start();

// Simple routing
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = str_replace('/index.php', '', $path);
if (empty($path)) $path = '/';

// Load Twig
require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/cache',
    'auto_reload' => true,
]);

// Add global variables
$twig->addGlobal('isAuthenticated', isset($_SESSION['user']));
$twig->addGlobal('user', $_SESSION['user'] ?? null);

// Route handling
switch ($path) {
    case '/':
        echo $twig->render('index.html.twig');
        break;
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            handleLogin();
        }
        echo $twig->render('login.html.twig');
        break;
    case '/signup':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            handleRegister();
        }
        echo $twig->render('signup.html.twig');
        break;
    case '/dashboard':
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        echo $twig->render('dashboard.html.twig');
        break;
    case '/dashboard/tickets':
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        echo $twig->render('tickets.html.twig');
        break;
    case '/dashboard/tickets/create':
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        echo $twig->render('create-ticket.html.twig');
        break;
    case '/dashboard/tickets/edit':
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        echo $twig->render('edit-ticket.html.twig');
        break;
    case '/logout':
        session_destroy();
        header('Location: /');
        exit;
    default:
        http_response_code(404);
        echo $twig->render('404.html.twig');
}

function handleLogin() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Mock users
    $mockUsers = [
        'test@example.com' => ['password' => 'password123', 'name' => 'Test User'],
        'demo@example.com' => ['password' => 'demo123', 'name' => 'Demo User'],
    ];
    
    if (isset($mockUsers[$email]) && $mockUsers[$email]['password'] === $password) {
        $_SESSION['user'] = [
            'id' => 'mock-' . substr(md5(time()), 0, 8),
            'email' => $email,
            'name' => $mockUsers[$email]['name'],
        ];
        header('Location: /dashboard');
        exit;
    }
    
    // Check stored users
    $users = json_decode($_COOKIE['ticketapp_users'] ?? '[]', true);
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['user'] = $user;
            header('Location: /dashboard');
            exit;
        }
    }
    
    $_SESSION['error'] = 'Invalid email or password';
}

function handleRegister() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $name = $_POST['name'] ?? '';
    
    if (empty($email) || empty($password) || empty($name)) {
        $_SESSION['error'] = 'All fields are required';
        return;
    }
    
    $users = json_decode($_COOKIE['ticketapp_users'] ?? '[]', true);
    
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            $_SESSION['error'] = 'User already exists. Please log in instead.';
            return;
        }
    }
    
    $newUser = [
        'id' => substr(md5(time()), 0, 8),
        'email' => $email,
        'name' => $name,
        'password' => $password,
    ];
    
    $users[] = $newUser;
    setcookie('ticketapp_users', json_encode($users), time() + (86400 * 365), '/');
    
    $_SESSION['user'] = $newUser;
    header('Location: /dashboard');
    exit;
}
?>
