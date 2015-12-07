<?php

class RegistrerenController extends Controller
{

	public static $title = 'Registreren';

	public function index()
	{
        if (@$_SESSION['login']) {
            header('location:/bontekoe9/gebruiker');
        }

		View::make('register/index', [
			'title' => Self::$title
		]);
	}

    public function toevoegen()
    {
        if (@$_SESSION['login']) {
            header('location:/bontekoe9/gebruiker');
        }

        if ($_POST) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $voornaam = $_POST['voornaam'];
            $achternaam = $_POST['achternaam'];
            $postcode = strtolower($_POST['postcode']);
            $straatnaam = strtolower($_POST['straatnaam']);
            $huisnummer = $_POST['huisnummer'];
            $huisnummertoevoegsel = strtolower($_POST['huisnummertoevoegsel']);
            $stad = strtolower($_POST['stad']);

            $user = new User;

            $user->email = $email;
            $user->password = password_hash($password, PASSWORD_BCRYPT);
            $user->voornaam = $voornaam;
            $user->achternaam = $achternaam;
            $user->postcode = $postcode;
            $user->straatnaam = $straatnaam;
            $user->huisnummer = $huisnummer;
            $user->huisnummertoevoegsel = $huisnummertoevoegsel;
            $user->stad = $stad;

            $user->save();

            header('refresh:5; url=/bontekoe9/inloggen');

            echo 'U bent geregistreerd! U wordt terug gestuurd naar de inlog pagina in 5 seconden.';
        }
    }
}
