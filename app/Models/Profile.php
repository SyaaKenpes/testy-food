<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['judul', 
    'deskripsi', 
    'img',
    'visi_deskripsi',
    'visi_img',
    'misi_deskripsi',
    'misi_img'
    ];
}