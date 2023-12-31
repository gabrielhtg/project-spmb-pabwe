<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSectionModel extends Model
{
    use HasFactory;

    protected $table = 'hero_section';

    protected $fillable = [
        'header',
        'paragraph',
        'bg_image'
    ];

    public $timestamps = true;
}
