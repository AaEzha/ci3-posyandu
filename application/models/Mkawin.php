<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mkawin extends Eloquent
{
    protected $table = 'kawin';
	public $timestamps = false;
	protected $primaryKey = 'Id_Kawin';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
