<?php

class MedewerkerController extends Controller
{

    public static $title = 'Medewerker';

    public static $navigation = [
        'Film Toevoegen' => '/bontekoe9/medewerker/filmtoevoegen',
        'Film Overzicht' => '/bontekoe9/medewerker/filmoverzicht',
        'Film Momenten' => '/bontekoe9/medewerker/filmmomenten',
        'Film Moment Toevoegen' => '/bontekoe9/medewerker/filmmomenttoevoegen',
        'Bestelling Overzicht' => '/bontekoe9/medewerker/bestellingoverzicht'
    ];

    public function dashboard()
    {
        Self::checkLogin();

        View::make('medewerker/dashboard', [
            'title' => Self::$title,
            'page' => 'Dashboard',
            'navigation' => Self::$navigation
        ]);
    }

    public function filmtoevoegen()
    {
        Self::checkLogin();
        View::make('medewerker/filmtoevoegen', [
            'title' => Self::$title,
            'page' => 'Film Toevoegen',
            'navigation' => Self::$navigation
        ]);
    }

    public function filmtvgn()
    {
        Self::checkLogin();
        if (@$_POST) {
            
            $titel = $_POST['titel'];
            $genre = $_POST['genre'];
            $speelduur = $_POST['speelduur'];
            $regisseur = $_POST['regisseur'];
            $taalversie = $_POST['taalversie'];
            $dried = $_POST['dried'];
            $omschrijving = $_POST['omschrijving'];
            $filmposter = $_POST['filmposter'];
            $trailer = $_POST['trailer'];
            $imdb = $_POST['imdb'];

            if (Film::where('titel', '=', $titel)->firstOrFail) {
                header('HTTP/1.1 500 Internal Server Error');
                header('Content-Type: application/json; charset=UTF-8');
                die(json_encode(array('message' => 'ERROR', 'code' => 1337 )));
            }

            $film = new Film;

            $film->titel = $titel;
            $film->genre = $genre;
            $film->speelduur = $speelduur;
            $film->regisseur = $regisseur;
            $film->taalversie = $taalversie;
            $film->dried = $dried;
            $film->omschrijving = $omschrijving;
            $film->filmposter = $filmposter;
            $film->trailer = $trailer;
            $film->imdb = $imdb;

            $film->save();

        } else {
            header('location: /bontekoe9');
            die();
        }
    }

    public function filmoverzicht()
    {
        Self::checkLogin();
        $films = Film::all();

        View::make('medewerker/filmoverzicht', [
            'title' => Self::$title,
            'films' => $films,
            'page' => 'Film Overzicht',
            'navigation' => Self::$navigation
        ]);
    }

    public function filmwijzigen($id)
    {
        Self::checkLogin();
        $film = Film::find($id);

        View::make('medewerker/filmwijzigen', [
            'title' => 'Film Wijzigen',
            'page' => 'Film Overzicht',
            'navigation' => Self::$navigation,
            'film' => $film
        ]);
    }

    public function filmwzgn()
    {
        Self::checkLogin();
        if ($_POST) {

            $id = $_POST['filmid'];

            $film = Film::find($id);

            $titel = $_POST['filmtitel'];
            $genre = $_POST['filmgenre'];
            $speelduur = $_POST['filmspeelduur'];
            $regisseur = $_POST['filmregisseur'];
            $taalversie = $_POST['filmtaalversie'];
            $dried = $_POST['filmdried'];
            $omschrijving = $_POST['filmomschrijving'];
            $filmposter = $_POST['filmposter'];
            $trailer = $_POST['filmtrailer'];
            $imdb = $_POST['filmimdb'];

            $film->titel = $titel;
            $film->genre = $genre;
            $film->speelduur = $speelduur;
            $film->regisseur = $regisseur;
            $film->taalversie = $taalversie;
            $film->dried = $dried;
            $film->omschrijving = $omschrijving;
            $film->filmposter = $filmposter;
            $film->trailer = $trailer;
            $film->imdb = $imdb;

            $film->save();

            header('refresh:5;url=/bontekoe9/medewerker/filmwijzigen/' . $id);
            echo 'De film eigenschappen zijn geweizigd, u wordt terug gestuurd in 5 seconden.';
            die();
        } else {
            header('location: /bontekoe9/medewerker/filmoverzicht');
        }
    }

    public function uitvoeren()
    {
        Self::checkLogin();
        if ($_POST) {
            if (@$_POST['moment'] == 'moment') {
                $moment = Filmmoment::find($_POST['verwijderen']);

                $moment->delete();

                header('location: /bontekoe9/medewerker/filmmomenten');
                die('');
            } else {
                $film = Film::find($_POST['verwijderen']);

                $film->delete();
            }            
        }
        header('location: /bontekoe9/medewerker/filmoverzicht');
    }

    public function filmmomenten()
    {
        Self::checkLogin();

        $momenten = Filmmoment::all();

        View::make('medewerker/filmmomenten', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Film Momenten',
            'momenten' => $momenten
        ]);
    }

    public function filmmomenttoevoegen()
    {
        Self::checkLogin();

        $films = Film::all();

        View::make('medewerker/filmmomenttoevoegen', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Film Moment Toevoegen',
            'films' => $films
        ]);
    }

    public function fmt() {
        Self::checkLogin();

        if ($_POST) {

            $filmid = $_POST['filmid'];
            $zaalnummer = $_POST['zaalnummer'];
            $datum = $_POST['datum'];
            $tijdstip = $_POST['tijdstip'];


            if (empty(Filmmoment::zaal($zaalnummer)->datum($datum)->tijd($tijdstip)->first())) {
                
                $filmmoment = new Filmmoment;

                $filmmoment->film_id = $filmid;
                $filmmoment->zaal = $zaalnummer;
                $filmmoment->datum = $datum;
                $filmmoment->tijd = $tijdstip;

                $filmmoment->save();

                header('refresh:3;url=/bontekoe9/medewerker/filmmomenten');
                echo 'Er is een nieuw moment geregistreerd! U wordt naar film momenten verwezen.';
                die();
            } else {
                header('refresh:3;url=/bontekoe9/medewerker/filmmomenttoevoegen');
                echo 'Er is al een moment geregistreerd op dat tijdstip';
                die();
            }
        } else {
            header('location:/');
        }
    }

    public function bestellingoverzicht()
    {
        Self::checkLogin();

        $bestellingen = Filmbestelling::all();

        View::make('medewerker/bestellingoverzicht', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Bestelling Overzicht',
            'bestellingen' => $bestellingen
        ]);
    }

    public static function checkLogin()
    {
        if (!isset($_SESSION['login']) && $_SESSION['login'] == false) {
            header('location:/bontekoe9/inloggen');
            die();
        } elseif ($_SESSION['level'] == 0) {
            header('location:/bontekoe9');
            die();
        }
    }
}
