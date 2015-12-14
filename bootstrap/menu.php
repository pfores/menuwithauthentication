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
    ->user('pfores');

//Another link
MenuWithAuthentication::Menu()
    ->title('Another link')
    ->user(5);

//Multilevel
MenuWithAuthentication::Menu()->title('Multilevel')->icon('fa-credit-card');
MenuWithAuthentication::Menu()->title('Link in Level 2')->icon('fa-briefcase');
MenuWithAuthentication::Menu()->title('Link in Level 3')->icon('fa-user');


MenuWithAuthentication::Menu()
    ->title('Ultim menu')
    ->icon('fa-dashboard')
    ->url('http://www.google.com');