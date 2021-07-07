<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mdatang extends Eloquent
{
    protected $table = 'datang';
	public $timestamps = false;
	protected $primaryKey = 'Id_Datang';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
