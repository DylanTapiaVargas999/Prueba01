<?php
// Obtén el directorio actual del script
$currentDir = __DIR__;

// Ruta relativa al directorio actual
$controllerFile = $currentDir . '/../Controller/' . $controller . '.php';

// Verifica si el archivo del controlador existe
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();
    
    // Verifica si el método existe en el controlador
    if (method_exists($controller, $methop)) {
        $controller->{$methop}($params);
    } else {
        // Ruta ajustada al archivo Error.php
        require_once($currentDir . '/../Controller/Error.php');
    }
} else {
    // Ruta ajustada al archivo Error.php
    require_once($currentDir . '/../Controller/Error.php');
}
?>
