<?php

// Kiezen

Route::get('', 'HomeController@index');

// Restaurant

Route::get('restaurant', 'RestaurantController@index');
Route::get('restaurant/menukaart', 'RestaurantController@menukaart');

Route::get('restaurant/reserveren', 'RestaurantController@reserveren');
Route::get('restaurant/reservering', 'RestaurantController@reservering');

// Uitgaan

Route::get('uitgaan', 'UitgaanController@index');
Route::get('uitgaan/8090', 'UitgaanController@achtnegen');
Route::get('uitgaan/schuurfeest', 'UitgaanController@schuurfeest');
Route::get('uitgaan/urban', 'UitgaanController@urban');

// Bioscoop

Route::get('bioscoop', 'BioscoopController@index');

Route::get('bioscoop/films', 'BioscoopController@films');
Route::get('bioscoop/films/%', 'BioscoopController@film');
Route::get('bioscoop/filmzkn', 'BioscoopController@filmzkn');

Route::get('bioscoop/kaartjekopen', 'BioscoopController@kaartjekopen');
Route::get('bioscoop/kaartjekopen/%', 'BioscoopController@kaartjekopen');
Route::get('bioscoop/bestellen', 'BioscoopController@bestellen');

// Inloggen

Route::get('inloggen', 'InloggenController@index');
Route::get('inloggen/inloggen', 'InloggenController@inloggen');
Route::get('uitloggen', 'InloggenController@uitloggen');

// Medewerker

Route::get('medewerker', 'MedewerkerController@dashboard');
Route::get('medewerker/dashboard', 'MedewerkerController@dashboard');

Route::get('medewerker/filmtoevoegen', 'MedewerkerController@filmtoevoegen');
Route::get('medewerker/filmtvgn', 'MedewerkerController@filmtvgn');

Route::get('medewerker/filmoverzicht', 'MedewerkerController@filmoverzicht');

Route::get('medewerker/filmwijzigen/%', 'MedewerkerController@filmwijzigen');
Route::get('medewerker/filmwijzigen', 'MedewerkerController@filmwzgn');
Route::get('medewerker/uitvoeren', 'MedewerkerController@uitvoeren');

Route::get('medewerker/filmmomenten', 'MedewerkerController@filmmomenten');

Route::get('medewerker/filmmomenttoevoegen', 'MedewerkerController@filmmomenttoevoegen');
Route::get('fmt', 'MedewerkerController@fmt');

Route::get('medewerker/bestellingoverzicht', 'MedewerkerController@bestellingoverzicht');

// Gebruiker

Route::get('gebruiker', 'GebruikerController@index');

// Register

Route::get('register', 'RegistrerenController@index');
Route::get('registreren', 'RegistrerenController@index');
Route::get('registreren/toevoegen', 'RegistrerenController@toevoegen');
