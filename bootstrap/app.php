<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

// ===== ADD THIS BLOCK =====
// Set custom temporary directory
$tempDir = __DIR__.'/../storage/temp';
if (!is_dir($tempDir)) {
    mkdir($tempDir, 0777, true);
}
putenv("TMPDIR=$tempDir");
putenv("TEMP=$tempDir");
putenv("TMP=$tempDir");
ini_set('upload_tmp_dir', $tempDir);
ini_set('session.save_path', $tempDir);
// ===== END OF ADDED BLOCK =====

return $app;
