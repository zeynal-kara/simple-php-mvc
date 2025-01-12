<?php

spl_autoload_register(function ($class) {
    // Base directory for the "App" namespace
    $appPrefix = "App\\";
    $appBaseDir = dirname(__DIR__) . '/app/';

    // Check if the class belongs to the "App" namespace
    if (str_starts_with($class, $appPrefix)) {
        loadClass($class, $appPrefix, $appBaseDir);
        return;
    }

    // For other namespaces, automatically extract the prefix and use the common directory
    // Get the prefix up to the first '\'
    $prefix = substr($class, 0, strpos($class, '\\') + 1);
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR . $prefix;

    // Check if it's a valid namespace and load the class
    if (!empty($prefix)) {
        loadClass($class, $prefix, $baseDir);
        return;
    }

    throw new Exception("Class {$class} not found.");
});


/**
 * @throws Exception
 */
function loadClass($class, $prefix, $baseDir)
{
    $relativeClass = str_replace($prefix, '', $class);  // Remove the namespace prefix
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';  // Convert to file path

    if (!file_exists($file))
        throw new Exception("Class {$class} not found in {$file}.");

    require $file;
}
