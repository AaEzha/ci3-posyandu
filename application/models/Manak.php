<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manak extends Eloquent
{
    protected $table = 'anak';
	public $timestamps = false;
	protected $primaryKey = 'Id_Anak';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
