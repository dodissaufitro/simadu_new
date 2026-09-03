<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$users = \Illuminate\Support\Facades\DB::connection('mysql')->select('SELECT * FROM simadus.users LIMIT 1');
$roles = \Illuminate\Support\Facades\DB::connection('mysql')->select('SELECT * FROM simadus.roles LIMIT 1');
echo json_encode(['users' => $users, 'roles' => $roles]);
