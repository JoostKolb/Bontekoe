<?php

class InloggenController extends Controller
{

    public static $title;

    public function index()
    {
        if (@$_SESSION['login']) {
            header('location:/bontekoe9/gebruiker');
        }

        View::make('inloggen/index', [
            'title' => Self::$title,

        ]);
    }

    public function inloggen()
    {

        if ($_POST) {

            $user = User::where('email', '=', $_POST['email'])->first();

            if (empty($user)) {
                header('refresh:5;url=/bontekoe9/inloggen');

                echo 'Uw wachtwoord of Email is verkeerd. u wordt terug gestuurd naar de inlog pagina.';
                die();
            }

            if (password_verify($_POST['password'], $user->password)) {
                
                $_SESSION['id'] = $user->id;
                $_SESSION['voornaam'] = ucfirst($user->voornaam);
                $_SESSION['volledigenaam'] = $_SESSION['voornaam'] . ' ' . $user->achternaam;
                $_SESSION['email'] = $user->email;
                $_SESSION['level'] = $user->level;
                $_SESSION['login'] = true;

                header('refresh:5;url=/bontekoe9');

                echo 'U bent ingelogged! u wordt terug verwezen naar de hoofdpagina in 5 seconden.';

            } else {
                header('refresh:5;url=/bontekoe9/inloggen');

                echo 'Uw wachtwoord of Email is verkeerd. u wordt terug gestuurd naar de inlog pagina.';
            }

        } else {
            header('location: /bontekoe9/');
            die();
        }
    }

    public function uitloggen()
    {

        if ($_SESSION['login']) {
            unset($_SESSION['id']);
            unset($_SESSION['voornaam']);
            unset($_SESSION['email']);
            unset($_SESSION['login']);

            header('refresh:5;url=/bontekoe9/');

            echo "u bent uitgelogged. u wordt terug verwezen naar de hoofdpagina in 5 seconden.";
        } else {
            header('location: /bontekoe9/');
        }
    }
}
