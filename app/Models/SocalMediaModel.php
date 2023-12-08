<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocalMediaModel extends Model
{
    use HasFactory;

    protected $table= 'social_media_institusi';

    protected $fillable = [
        'nama',
        'link',
        'icon',
        'created_by',
        'updated_by'
    ];

    public $timestamps = true;
}
