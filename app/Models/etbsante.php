<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etbsante extends Model
{
    use HasFactory;

    protected $fillable = [
        'refEtb',
        'nom',
        'adresseEtb',
        'email',
        'tel',
        'estValide'
    ];
}
