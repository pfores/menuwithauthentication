<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 14/12/15
 * Time: 16:28
 */


//Home
MenuWithAuthentication::Menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('albertmayor');

//Another link
MenuWithAuthentication::Menu()
    ->title('Another link')
    ->icon('fa-link')
    ->user(1);

//Multilevel
MenuWithAuthentication::Menu()->title('Multilevel')->icon('fa-caret-down');
MenuWithAuthentication::Menu()->title('Level2')->icon('fa-caret-right');
MenuWithAuthentication::Menu()->title('Level3')->icon('fa-caret-right');


MenuWithAuthentication::Menu()
    ->title('Ultim element')
    ->icon('fa-ban')
    ->url('http://www.google.com');