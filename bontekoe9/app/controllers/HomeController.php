<?php

class HomeController extends Controller 
{
    
    public static $title = 'Kiezen';

    public function index() 
    {
        View::make('index', ['title' => Self::$title]);
    }
}
