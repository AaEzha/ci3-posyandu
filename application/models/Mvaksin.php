<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mvaksin extends Eloquent
{
    protected $table = 'vaksin';
	public $timestamps = false;
	protected $primaryKey = 'Id_Vaksin';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
