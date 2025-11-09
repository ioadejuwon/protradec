<?php 


$footeryear = date("Y");
define('FOOTERYEAR', $footeryear);

define('FOLDER', 'protradec');

if ($_SERVER['HTTP_HOST'] == 'localhost:8888') {
    // Local environment
    define('BASE_URL', 'http://localhost:8888/'.FOLDER.'/');
    define('ADMIN_URL', 'http://localhost:8888/'.FOLDER.'/admin');
}elseif ($_SERVER['HTTP_HOST'] == 'oreoluwas-macbook-pro.local:8888') {
    // Local environment
    define('BASE_URL', 'http://oreoluwas-macbook-pro.local:8888/'.FOLDER.'/');
    define('ADMIN_URL', 'http://oreoluwas-macbook-pro.local:8888/'.FOLDER.'/admin');
} else {
    // Hosting environment
    define('BASE_URL', 'https://protradec.com/');
    define('ADMIN_URL', 'https://admin.protradec.com/');
}



// Core Pages

define('HOME', BASE_URL);
define('ABOUT', 'about');
define('SERVICES', 'services');
define('SERVICE', 'service/');
define('PROJECTS', 'projects');
define('PROJECT', 'project/');
define('BLOG', 'blog');
define('TEAM', 'team');
define('CONSULTATION', 'consultation');
define('CONTACT', 'contact');
define('FAQ', 'faqs');
define('TESTIMONIALS', 'testimonials');



// ADMIN