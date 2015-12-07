<?php

class UitgaanController extends Controller
{

    public static $title = 'Uitgaan';

    public static $navigation = [
        'Home' => '/uitgaan',
        'Areas' => [
            '80\'s en 90\'s area' => '/bontekoe9/uitgaan/8090',
            'Schuurfeest Area' => '/bontekoe9/uitgaan/schuurfeest',
            'Urban Area' => '/bontekoe9/uitgaan/urban'
        ]
    ];

    public function index()
    {
        View::make('uitgaan/index', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Home'
        ]);
    }

    public function achtnegen()
    {
        View::make('uitgaan/achtnegen', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => '80\'s en 90\'s area'
        ]);
    }

    public function schuurfeest()
    {
        View::make('uitgaan/schuurfeest', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Schuurfeest Area'
        ]);
    }

    public function urban()
    {
        View::make('uitgaan/urban', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Urban Area'
        ]);
    }
}
