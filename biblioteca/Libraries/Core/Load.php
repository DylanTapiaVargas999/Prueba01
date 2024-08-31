<?php
$currentDir = __DIR__;
$controllerFile = $currentDir . '/../Controller/' . $controller . '.php';
$errorFile = $currentDir . '/../Controller/Error.php';

echo "Attempting to load controller file: $controllerFile\n";
echo "Attempting to load error file: $errorFile\n";

if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();
    
    if (method_exists($controller, $methop)) {
        $controller->{$methop}($params);
    } else {
        require_once($errorFile);
    }
} else {
    require_once($errorFile);
}
?>
