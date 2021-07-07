<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Makseptor extends Eloquent
{
    protected $table = 'akseptor';
	public $timestamps = false;
	protected $primaryKey = 'Id_Akseptor';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
