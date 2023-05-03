<?php
use App\routing\RouteDispatcher;
/**
 * Start session if not already started
 */
if(!isset($_SESSION)) session_start();
//load enviroments variable
require_once __DIR__ . '/../app/config/_env.php';

new \App\classes\Database();

set_error_handler([new \App\classes\ErrorHandler(), 'handleErrors']);

require_once __DIR__ . '/../app/routing/routes.php';

new \App\routing\RouteDispatcher($router);
