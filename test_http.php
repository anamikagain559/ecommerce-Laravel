<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::create(
    '/register',
    'POST',
    ['name' => 'Test', 'email' => 'test5@test.com', 'phone' => '1234567890', 'password' => 'password', 'password_confirmation' => 'password']
);
$request->headers->set('Accept', 'application/json');

try {
    $response = $kernel->handle($request);
    echo "Status: " . $response->getStatusCode() . "\n";
    if ($response->getStatusCode() >= 400) {
        echo $response->getContent();
    }
} catch (\Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
