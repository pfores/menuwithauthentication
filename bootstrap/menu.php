<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 14/12/15
 * Time: 16:28
 */


//Home
MenuWithAuthentication::Menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('albertmayor');

//Another link
MenuWithAuthentication::Menu('anotlink')
    ->title('Another link')
    ->user(5);

//Multilevel
MenuWithAuthentication::Menu('multi')->title('Multilevel')->icon('fa-caret-down');
MenuWithAuthentication::Menu('link2')->title('Level2')->icon('fa-caret-right');
MenuWithAuthentication::Menu('link3')->title('Level3')->icon('fa-caret-right');


MenuWithAuthentication::Menu('link4')
    ->title('Ultim element')
    ->icon('fa-ban')
    ->url('http://www.google.com');