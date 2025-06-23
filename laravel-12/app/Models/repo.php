<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'abstrak',
        'file_pdf',
        'tahun',
        'jenis_karya',
        'penulis',
        'kata_kunci',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'penulis' => 'array',
        'kata_kunci' => 'array',
        'tahun' => 'integer',
    ];
}