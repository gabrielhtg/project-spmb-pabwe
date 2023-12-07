<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverFaq extends Model
{
    use HasFactory;

    protected $table = 'cover_faq';

    protected $fillable = [
        'header',
        'paragraph',
        'bg_image'
    ];

    public $timestamps = true;
}
