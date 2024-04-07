<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefonkonyv extends Model
{
    use HasFactory;

    protected $table = 'telefonkonyv';

    protected $fillable = [ 
        'nev',
        'email',
        'telefonszam',
        'lakcim',
        'levelezesicim',
    ];