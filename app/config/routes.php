<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| HOME / LANDING PAGE
|--------------------------------------------------------------------------
*/

// Main landing page
$router->get('/', 'StudentController::index');


/*
|--------------------------------------------------------------------------
| STUDENT ROUTES
|--------------------------------------------------------------------------
*/

// Student Home
$router->get('/student', 'StudentController::index');

// Grant Student Access
$router->get('/student/access', 'StudentController::access');

// Student Logout
$router->get('/student/logout', 'StudentController::logout');

// Student Profile
$router->get('/student/profile', 'StudentController::profile')
      ->middleware('student');