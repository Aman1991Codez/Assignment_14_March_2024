<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McDonaldsLocation extends Model
{
    use HasFactory;

    protected $table = 'mcdonalds_locations';

    protected $fillable = [
        'title',
        'link',
        'domain',
        'displayed_link',
        'snippet',
        'prerender',
        'block_position',
    ];
}
