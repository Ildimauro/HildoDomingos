<?php
/**
 * Sistema Inteligente de Sugestão, Gestão e Geração de Temas e Trabalhos Académicos
 * Ponto de entrada principal da aplicação
 * 
 * @author Ildimauro
 * @version 1.0.0
 */

// Iniciar sessão
session_start();

// Definir timezone
date_default_timezone_set('Africa/Luanda');

// Definir header charset
header('Content-Type: text/html; charset=utf-8');

// Carregar configurações
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';

// Carregar helpers
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/validation.php';
require_once __DIR__ . '/helpers/auth.php';

// Autoloader para classes
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/app/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

// Roteador simples
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = str_replace('/HildoDomingos', '', $request_uri);
$request_method = $_SERVER['REQUEST_METHOD'];

// Remover trailing slash
$request_uri = rtrim($request_uri, '/');
if (empty($request_uri)) {
    $request_uri = '/';
}

// Dividir a URL em partes
$segments = explode('/', trim($request_uri, '/'));

// Determinar o controlador e ação
$controller = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'HomeController';
$action = !empty($segments[1]) ? $segments[1] : 'index';
$params = array_slice($segments, 2);

try {
    // Verificar se o controlador existe
    $controller_path = __DIR__ . '/app/controllers/' . $controller . '.php';
    
    if (!file_exists($controller_path)) {
        // Se não existir, usar HomeController
        $controller = 'HomeController';
        $action = 'notfound';
    }
    
    require_once $controller_path;
    
    // Instanciar o controlador
    $controller_instance = new $controller();
    
    // Verificar se o método existe
    if (!method_exists($controller_instance, $action)) {
        $action = 'notfound';
    }
    
    // Executar a ação
    $controller_instance->{$action}(...$params);
    
} catch (Exception $e) {
    // Log do erro
    error_log($e->getMessage());
    
    // Mostrar erro
    header('HTTP/1.1 500 Internal Server Error');
    echo "<h1>Erro 500 - Erro Interno do Servidor</h1>";
    echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
}
?>