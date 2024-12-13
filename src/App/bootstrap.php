<?php

// loading and configuring

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";


use  Framework\App;

$app = new App();

echo __DIR__;

return $app;