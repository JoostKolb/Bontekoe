<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Film extends Eloquent
{
    protected $table = 'films';
    protected $fillable = ['titel', 'genre', 'speelduur', 'regisseur', 'taalversie', 'dried', 'omschrijving', 'filmposter', 'trailer', 'imdb'];
    public $timestamps = false;
}
