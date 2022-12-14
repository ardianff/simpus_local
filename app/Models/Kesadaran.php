<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kesadaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_kesadaran', 'nama_kesadaran', 'status'
    ];
}