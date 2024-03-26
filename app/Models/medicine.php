<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'summary',
        'brand_ames',
        'generic_name',
        'Absorption',
        'Carbetapentane',
        'medicine_name',
        'side_effect',

    ];
}
