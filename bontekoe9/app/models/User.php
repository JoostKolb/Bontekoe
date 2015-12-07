<?php

/**
 * Models gebruiken Eloquent, voor tutorial zoek laravel eloquent orm. alle documentatie staat daar.
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	protected $table = 'users';
	protected $fillable = ['email', 'password', 'voornaam', 'achternaam', 'postcode', 'straatnaam', 'huisnummer', 'huisnummertoevoegsel', 'stad'];
    public $timestamps = false;

    public function filmbestellingen()
    {
        return $this->hasMany('Filmbestelling');
    }

    public function delete()
    {
        $this->filmbestellingen()->delete();

        return parent::delete();
    }
}
