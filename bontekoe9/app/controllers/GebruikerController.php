<?php

class GebruikerController extends Controller
{

    public static $title = 'Gebruiker';

    public function index()
    {
        Self::loginCheck();

        $user = User::find($_SESSION['id']);
        
        if (@$_GET['verwijderen'] == 'true') {
            $user->delete();
            header('location:/bontekoe9/uitloggen');
            die();
        }

        View::make('gebruiker/index', [
            'title' => Self::$title,
            'user' => $user,
        ]);
    }

    public static function loginCheck()
    {
        if (!isset($_SESSION['login']) && $_SESSION['login'] == false) {
            header('location:/bontekoe9/inloggen');
            die();
        }
    }
}
