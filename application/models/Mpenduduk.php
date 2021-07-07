<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mpenduduk extends Eloquent
{
    protected $table = 'penduduk';
	public $timestamps = false;
	protected $primaryKey = 'NIK';
	public $incrementing = false;
	protected $keyType = 'string';
}
