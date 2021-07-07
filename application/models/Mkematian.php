<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mkematian extends Eloquent
{
    protected $table = 'kematian';
	public $timestamps = false;
	protected $primaryKey = 'Id_Kematian';
	public $incrementing = false;
	protected $keyType = 'string';
}
