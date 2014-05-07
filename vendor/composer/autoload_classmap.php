<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Modules\\Admin\\AdminServiceProvider' => $baseDir . '/app/modules/admin/AdminServiceProvider.php',
    'App\\Modules\\Admin\\Controllers\\HomeController' => $baseDir . '/app/modules/admin/controllers/HomeController.php',
    'App\\Modules\\Admin\\Controllers\\PermissionsController' => $baseDir . '/app/modules/admin/controllers/PermissionsController.php',
    'App\\Modules\\Admin\\Controllers\\UsersController' => $baseDir . '/app/modules/admin/controllers/UsersController.php',
    'App\\Modules\\Admin\\Models\\Roles' => $baseDir . '/app/modules/admin/models/Roles.php',
    'App\\Modules\\Admin\\Models\\Users' => $baseDir . '/app/modules/admin/models/Users.php',
    'App\\Modules\\Shop\\Controllers\\ShopController' => $baseDir . '/app/modules/shop/controllers/ShopController.php',
    'App\\Modules\\Shop\\ShopServiceProvider' => $baseDir . '/app/modules/shop/ShopServiceProvider.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
);
