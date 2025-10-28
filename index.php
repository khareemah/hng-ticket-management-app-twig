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

// ✅ Expose session globally to Twig if you ever need it directly
$twig->addGlobal('session', $_SESSION);

// Route handling
switch ($path) {
    case '/':
        echo $twig->render('index.html.twig');
        break;

    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            handleLogin();
        }

        // ✅ Pass session error to Twig and clear it afterward
        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);

        echo $twig->render('login.html.twig', ['error' => $error]);
        break;

    case '/signup':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            handleRegister();
        }

        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['error']);

        echo $twig->render('signup.html.twig', ['error' => $error]);
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
        break;
}

/**
 * Handle login requests
 */
function handleLogin() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Mock users
    $mockUsers = [
        'test@example.com' => ['password' => 'password123', 'name' => 'Test User'],
        'demo@example.com' => ['password' => 'demo123', 'name' => 'Demo User'],
    ];
    
    // Check mock users
    if (isset($mockUsers[$email]) && $mockUsers[$email]['password'] === $password) {
        $_SESSION['user'] = [
            'id' => 'mock-' . substr(md5(time()), 0, 8),
            'email' => $email,
            'name' => $mockUsers[$email]['name'],
        ];
        header('Location: /dashboard');
        exit;
    }
    
    // Check stored cookie users
    $users = json_decode($_COOKIE['ticketapp_users'] ?? '[]', true);
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['user'] = $user;
            header('Location: /dashboard');
            exit;
        }
    }
    
    // ❗ Invalid credentials: set error and redirect
    $_SESSION['error'] = 'Invalid email or password';
    header('Location: /login');
    exit;
}

/**
 * Handle user registration
 */
function handleRegister() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $name = $_POST['name'] ?? '';
    
    if (empty($email) || empty($password) || empty($name)) {
        $_SESSION['error'] = 'All fields are required';
        header('Location: /signup');
        exit;
    }
    
    $users = json_decode($_COOKIE['ticketapp_users'] ?? '[]', true);
    
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            $_SESSION['error'] = 'User already exists. Please log in instead.';
            header('Location: /signup');
            exit;
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
    header('Location: /login');
    exit;
}
?>
