<?php

/**
 * @author Bao
 */


use App\Controllers\IndexController;
use App\Controllers\GatewayController;



define('GET', 'GET');
define('POST', 'POST');

return [
    //[GET, '', [IndexController::class, 'index']],
    [POST, '/gateway', [GatewayController::class, 'index']]

];
