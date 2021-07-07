<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mhamil extends Eloquent
{
    protected $table = 'ibuhamil';
	public $timestamps = false;
	protected $primaryKey = 'Id_Kehamilan';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
