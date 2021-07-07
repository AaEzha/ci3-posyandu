<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mmelahirkan extends Eloquent
{
    protected $table = 'melahirkan';
	public $timestamps = false;
	protected $primaryKey = 'Id_Lahir';
	public $incrementing = false;
	protected $keyType = 'string';
}
