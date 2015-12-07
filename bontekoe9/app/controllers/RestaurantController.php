<?php

class RestaurantController extends Controller
{

	public static $title = 'Restaurant';

    public static $navigation = [
        'Home' => '/bontekoe9/restaurant',
        'Menukaart' => '/bontekoe9/bontekoe9/restaurant/menukaart',
        'Reserveren' => '/bontekoe9/restaurant/reserveren'
    ];

    public function index()
    {
        View::make('restaurant/index', [
        	'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Home'
        ]);
    }

    public function menukaart()
    {

    	$dranken = Menukaart::where('positie', '=', 4)->get();
    	$voorgerechten = Menukaart::where('positie', '=', 1)->get();
    	$hoofdgerechten = Menukaart::where('positie', '=', 2)->get();
    	$nagerechten = Menukaart::where('positie', '=', 3)->get();

        View::make('restaurant/menukaart', [
        	'title' => 'Menukaart',
            'navigation' => Self::$navigation, 
            'page' => 'Menukaart',
        	'dranken' => $dranken,
        	'voorgerechten' => $voorgerechten,
        	'hoofdgerechten' => $hoofdgerechten,
        	'nagerechten' => $nagerechten
        ]);
    }

    public function reserveren()
    {
        View::make('restaurant/reserveren', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Reserveren'
        ]);
    }

    public function reservering()
    {
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $aantalpersonen = $_POST['aantalpersonen'];
        $datum = $_POST['datum'];
        $tijd = $_POST['tijd'];
        $opmerkingen = $_POST['opmerkingen'];


        $mail = new DBKMailer;

        $mail->addAddress($email, $naam);
        $mail->Subject('Reservering De Bonte Koe');
        $mail->Body('<p>U heeft een reservering geplaats bij <a href="http://aladebontekoe.tk/">De Bonte Koe!</a></p><h3>Info Reservering:</h3><p>Aantal personen: ' . $aantalpersonen . ', Datum: ' . $datum . ', Tijdstip: ' . $tijd . ', Overige opmerkingen: ' . $opmerkingen . ' </p>');

        $mail->send();

        header('refresh:5;url=/bontekoe9/restaurant');
        echo "Uw reservering is gemaakt en er is een mail naar u gestuurd met de details! U wordt verwezen naar de restaurant pagina in 5 seconden.";
    }
}
