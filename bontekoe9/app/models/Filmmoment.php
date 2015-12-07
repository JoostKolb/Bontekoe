<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Filmmoment extends Eloquent
{
    protected $table = 'filmmomenten';
    protected $fillable = ['film_id', 'zaal', 'datum', 'tijd'];
    public $timestamps = false;

    public function scopeZaal($query, $zaalnummer)
    {
        return $query->whereZaal($zaalnummer);
    }

    public function scopeDatum($query, $datum)
    {
        return $query->whereDatum($datum);
    }

    public function scopeTijd($query, $tijd)
    {
        return $query->whereTijd($tijd);
    }

    public function film()
    {
        return $this->belongsTo('Film');
    }

}
