<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/func.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'My Band');

// Display template: output html
$templateParser->display('head.tpl');












$action= isset($_GET['action'])?$_GET['action']:'home';
switch ($action) {
    case 'home':
       $templateParser->display('header.tpl');
       $templateParser->display('nav.tpl');
       $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        // Get newsarticles from database
        include('model/select_newsarticles.php');
        $templateParser->assign('result',$result);
        
        
       include('model/GET_NR_PER_PAGE.php');
        $templateParser->assign('total_number_articles',$total_number_articles);
        $templateParser->display('newsarticles.tpl');
        
        $templateParser->assign('footer', 'Pepijn MD2B');

        $templateParser->display('footer.tpl');
        
        
        break;
    case 'tour':
        $templateParser->display('header.tpl');
       $templateParser->display('nav.tpl');
        include('model/select_tour.php');
        include('views/tour.php');
        $templateParser->assign('footer', 'Pepijn MD2B');

        $templateParser->display('footer.tpl');
        break;
            
    case 'about':
        $templateParser->display('header.tpl');
        $templateParser->display('nav.tpl');
        $templateParser->display('about.tpl');
        $templateParser->assign('footer', 'Pepijn MD2B');

        $templateParser->display('footer.tpl');
        break;
        
    case 'contact':
        $templateParser->display('header.tpl');
        $templateParser->display('nav.tpl');
        $templateParser->display('contact.tpl');
        $templateParser->assign('footer', 'Pepijn MD2B');

        $templateParser->display('footer.tpl');
        break;
    case 'search':
        $templateParser->display('header.tpl');
        $templateParser->display('nav.tpl');
        $templateParser->display('views/search.tpl');
        break;

}

?>