<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kliping extends Model
{
    use HasFactory;
    protected $table ="kliping";
    protected $primaryKey ="id";
    protected $fillable =[
        'nama',
        'judul',
        'tanggal',
        'isi',
        'url',
        'tampil',
        'label',
    ];  
}
