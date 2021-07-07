<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mvitamin extends Eloquent
{
    protected $table = 'vitamin';
	public $timestamps = false;
	protected $primaryKey = 'Id_Vitamin';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $guarded = [];
}
