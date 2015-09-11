<?php
// load dependencies
require_once '../vendor/autoload.php';

use thom855j\PHPScrud\DB,
 thom855j\PHPAuthFramework\Auth;

// start db
DB::load('mysql', 'localhost', 'php-auth-framework', 'root', '');

// start session
session_start();

// setup class
Auth::load()->setAttribute('db',  DB::load());
Auth::load()->setAttribute('token', 'H4qRRbMkUpgvw==');

// if the correct token is given, the user status is changed to active
Auth::load()->activate($key);

var_dump($_SESSION);
var_dump($_COOKIE);