<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prudoto extends Model
{
    protected $fillable = ['nome','custo','preco','quantidade'];
    /* use HasFactory; */
}
