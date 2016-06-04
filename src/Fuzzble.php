<?php
namespace Fuzzble;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Fuzzble extends Eloquent
{
	
	protected $table = "fuzzble";

	protected $fillable = ['name'];

}