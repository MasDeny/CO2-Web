<?php

use App\Core\Router;

/**
 * Web routes
 */
Router::get('/', 'Controllers\HomeController@index');
Router::get('home', 'Controllers\HomeController@index');
Router::get('about-us', 'Controllers\HomeController@aboutUs');
Router::get('contact-us', 'Controllers\HomeController@contactUs');
Router::get('join-us', 'Controllers\HomeController@joinUs');
Router::get('service', 'Controllers\HomeController@services');
Router::get('thanks', 'Controllers\HomeController@thanks');
Router::get('privacy-policy', 'Controllers\HomeController@privacyAndPolicy');
Router::get('how-it-outsourcing-works', 'Controllers\HomeController@itOutsourcingWorks');
Router::get('how-software-development-works', 'Controllers\HomeController@softwareDevelopmentWorks');




/**
 * There is no route defined for a certain location
 */
Router::error(function () {
    Router::parseRender('_errorPage/_404', []);
}, 404);

/**
 * Uncomment this function to migrate tables
 * It will commented automatically again
 */
// createTables();

Router::dispatch();
