<?php

namespace App;

use RuntimeException;

class Bootstrap
{
    public static function setup(): void
    {
        session_start();
        define('APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
        self::loadEnvFile( dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env');

        if (isset($_ENV['SHOW_ERROR']) &&
            strcasecmp($_ENV['SHOW_ERROR'], 'true') !== 0)
        {
            error_reporting(0);
        }
    }

    private static function loadEnvFile(string $filePath): void
    {
        if (!file_exists($filePath)) {
            throw new RuntimeException(".env file not found at: {$filePath}");
        }

        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {

            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            [$key, $value] = array_map('trim', explode('=', $line, 2));

            if (!$key) {
                throw new RuntimeException("Invalid .env entry: {$line}");
            }

            $_ENV[$key] = $value;
        }
    }
}