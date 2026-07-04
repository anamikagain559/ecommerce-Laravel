<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $data = ['name' => 'Test', 'email' => 'test3@test.com', 'phone' => '12345', 'password' => '12345678', 'password_confirmation' => '12345678'];
    
    $validator = Illuminate\Support\Facades\Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'phone' => ['required', 'string', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:4', 'confirmed'],
    ]);
    
    $validator->validate();
    echo "Validator Success!\n";
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
