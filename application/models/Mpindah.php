<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mpindah extends Eloquent
{
    protected $table = 'pindah';
	public $timestamps = false;
	protected $primaryKey = 'Id_Pindah';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
