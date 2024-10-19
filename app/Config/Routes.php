<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Signup page routes:
// $routes->get('/SignUp', 'LoginController::SignUp');
// $routes->post('savedata', 'LoginController::savedata');
// $routes->get('SignIn', 'LoginController::SignIn');

// Home and dashboard routes:
$routes->get('/',"LoginController::getSlidehome");
$routes->post('dashboard','LoginController::checkAdmin');
$routes->get('dashboard', 'LoginController::dashboard');
$routes->get('readmore','LoginController::read');
$routes->post('getContact','LoginController::getContact');

// $routes->get('Categories', 'LoginController::categories');
$routes->get('/category','LoginController::getCat');
$routes->post('saveCat','LoginController::saveCat');
$routes->get('/deleteCat/(:num)', 'LoginController::deleteCat/$1');
$routes->post('UpdateCategory','LoginController::UpdateCategory');

// Slider routes:
$routes->post('saveSlider','LoginController::saveSlider');
$routes->post('UpdateSlider/(:num)','LoginController::UpdateSlider/$1');
$routes->get('slider','LoginController::getSliderdash');
$routes->get('deleteSlide/(:num)','LoginController::deleteSlide/$1');
// $routes->get('editslide/(:num)','LoginController::editSlide/$1');

// Projects Routs:
// $routes->get('/projects', 'LoginController::getCategories');
// $routes->post('/savePr', 'LoginController::saveProject');
// $routes->get('/(:num)', 'LoginController::deleteProject/$1');
// $routes->post('/search', 'LoginController::searchProject');

$routes->get('/projects','LoginController::getCategories');
$routes->post('/savePr', "LoginController::saveProject");
$routes->get('/(:num)', "LoginController::deleteProject/$1");
$routes->post('search',"LoginController::searchProject");

// Messages Routes:
$routes->get('Message','LoginController::message');
$routes->get('delMsg/(:num)','LoginController::delMsg/$1');
$routes->get('excel/download', 'LoginController::downloadExcel');



// Portfolio Routes:
$routes->get('portfolio','LoginController::getPrHome');
$routes->get('projectdetails/(:num)','LoginController::details/$1');

// Review routes:
$routes->post('Review','LoginController::Review');
$routes->get('/reviews','LoginController::getReview');
$routes->get('del/(:num)','LoginController::delReview/$1');
// $routes->get('/','LoginController::getReviewHome');

// Blogs routes:
$routes->get('blogs','LoginController::getBlogs');
$routes->post('addBlogs','LoginController::addBlogs');
$routes->get('delBlog/(:num)','LoginController::deleteBlog/$1');
$routes->get("blogdetails/(:num)","LoginController::blogdetails/$1");
$routes->post('editB',"LoginController::editBlog");


// $routes->get('getCatD', "LoginController::getCatD");
// logoout route:
$routes->get('logout','LoginController::logout');


?>