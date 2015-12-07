<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Filmbestelling extends Eloquent
{
    protected $table = 'filmbestellingen';
    protected $fillable = ['filmmoment_id', 'user_id', 'prijs', 'aantalpersonen'];
    public $timestamps = false;

    public function filmmoment()
    {
        return $this->belongsTo('Filmmoment');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
