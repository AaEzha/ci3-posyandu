<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mtimbangan extends Eloquent
{
    protected $table = 'timbangan';
	public $timestamps = false;
	protected $primaryKey = 'Id_Timbangan';
	public $incrementing = false;
	protected $keyType = 'string';
}
