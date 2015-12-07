<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Menukaart extends Eloquent
{
	protected $table = 'menukaart';
	protected $fillable = ['naam', 'omschrijving', 'ingredienten', 'image'];
	public $timestamps = false;
}