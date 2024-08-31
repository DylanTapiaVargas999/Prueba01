<?php
// Obtener el directorio actual del archivo Load.php
$currentDir = __DIR__;

// Construir la ruta al archivo del controlador
$controllerFile = $currentDir . '/../Controller/' . $controller . '.php';

// Verificar si el archivo del controlador existe
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();
    
    // Verificar si el método existe en el controlador
    if (method_exists($controller, $methop)) {
        $controller->{$methop}($params);
    } else {
        // Construir la ruta correcta a Error.php
        require_once($currentDir . '/../Controller/Error.php');
    }
} else {
    // Construir la ruta correcta a Error.php
    require_once($currentDir . '/../Controller/Error.php');
}
?>
