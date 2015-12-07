<?php

class BioscoopController extends Controller
{

    public static $title = 'Bioscoop';

    public static $navigation = [
        'Home' => '/bontekoe9/bioscoop',
        'Films' => '/bontekoe9/bioscoop/films',
        'Kaartje kopen' => '/bontekoe9/bioscoop/kaartjekopen'
    ];

	public function index() {

        if(@$_SESSION['inlog'] == true) {
            echo 'het is waar';
        }

        $films = Film::take(3)->orderByRaw("RAND()")->get();

		View::make('bioscoop/index', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Home',
			'films' => $films
		]);
	}

    public function films()
    {
        $films = Film::all();

        View::make('bioscoop/films', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Films',
            'films' => $films
        ]);
    }

    public function film($id)
    {
        $film = Film::find($id);

        View::make('bioscoop/film', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Films',
            'film' => $film
        ]);
    }

    public function filmzkn() 
    {
        if ($_POST) {
            echo Film::where('titel', 'LIKE', '%' . $_POST['zoekterm'] . '%')->get();
        } else {
            header('location: /bontekoe9/bioscoop/films');
        }
    }

    public function kaartjekopen($id = 0)
    {


        if (!empty($id)) {
            $multiple = false;
            $momenten = Filmmoment::where('film_id', '=', $id)->orderBy('datum', 'ASC')->get();
        } else {
            $multiple = true;
            $momenten = Filmmoment::orderBy('datum', 'ASC')->get();
        }

        View::make('bioscoop/kaartjekopen', [
            'title' => Self::$title,
            'navigation' => Self::$navigation,
            'page' => 'Kaartje kopen',
            'momenten' => $momenten,
            'multiple' => $multiple
        ]);
    }

    public function bestellen()
    {
        if ($_POST) {
            $moment = ''; $prijs = ''; $prijspersonen = '';

            if (!empty($_POST['bestellen'])) {
                $moment = Filmmoment::find($_POST['bestellen']);

                if ($moment->tijd == '11:00:00') {
                    $prijspersonen = 7.50;
                    $prijs = $prijspersonen * $_POST['aantalpersonen'];
                } else {
                    $prijspersonen = 10.00;
                    $prijs = $prijspersonen * $_POST['aantalpersonen'];
                }
                if ($moment->film->dried == 1) {
                    $driedprijs = 2.50 * $_POST['aantalpersonen'];
                    $prijs = $prijs + $driedprijs;
                }
            } else {
                $prijs = $_POST['prijs'];
                $momentid = $_POST['momentid'];
                $aantalpersonen = $_POST['aantalpersonen'];
                $userid = $_POST['userid'];

                $bestelling = new Filmbestelling;

                $bestelling->prijs = $prijs;
                $bestelling->filmmoment_id = $momentid;
                $bestelling->aantalpersonen = $aantalpersonen;
                $bestelling->user_id = $userid;

                $bestelling->save();

                $user = User::find($userid);

                $mail = new DBKMailer;
                
                $mail->addAddress($user->email, $user->voornaam . ' ' . $user->achternaam);
                $mail->Subject('Bestelling film kaartje');
                $mail->Body('U heeft een film kaartje bestelt bij De Bonte Koe. De prijs is: €' . $prijs);

                $mail->send();

                header('refresh:5;url=/bontekoe9/bioscoop/kaartjekopen');
            }
            

            View::make('bioscoop/bestellen', [
                'title' => Self::$title,
                'navigation' => Self::$navigation,
                'page' => 'Kaartje kopen',
                'moment' => $moment,
                'prijs' => $prijs,
                'prijspersonen' => $prijspersonen
            ]);
        } else {
            header('location:/bontekoe9/bioscoop/kaartjekopen');
            die();
        }
    }
}
