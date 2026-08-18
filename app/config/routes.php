<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


/*
|--------------------------------------------------------------------------
| STUDENT HOME - MAIN LANDING PAGE
|--------------------------------------------------------------------------
*/

$router->get('/', 'StudentController::index');


/*
|--------------------------------------------------------------------------
| ORIGINAL LAVALUST LANDING PAGE
|--------------------------------------------------------------------------
*/

$router->get('/lavalust', 'Welcome::index');


/*
|--------------------------------------------------------------------------
| STUDENT ROUTES
|--------------------------------------------------------------------------
*/

$router->get('/student', 'StudentController::index');

$router->get('/student/access', 'StudentController::access');

$router->get('/student/logout', 'StudentController::logout');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('student');