<?php

use App\Core\Router;
use App\Core\Response;

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
Router::get('/carrer/talent-acquisition-internship-detail','Controllers\HomeController@talentAcuquisition');
Router::get('/carrer/backend-developer-detail','Controllers\HomeController@backendDeveloper');
Router::get('/carrer/react-js-developer-detail','Controllers\HomeController@reactJsDeveloper');


Router::post('sendEmail', 'Controllers\HomeController@SendEmail');

/**
 * There is no route defined for a certain location
 */
Router::error(function () {
    Response::setStatusCode(404);
    Router::parseRender('_errorPage/_404', []);
    exit;
});

/**
 * Uncomment this function to migrate tables
 * It will commented automatically again
 */
// createTables();

Router::dispatch();
