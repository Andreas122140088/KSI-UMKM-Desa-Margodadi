<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitStatistic extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi
    protected $table = 'visit_statistics';

    // Tentukan kolom yang boleh diisi
    protected $fillable = [
        'page_url',
        'ip_address',
        'created_at',
    ];

    // Jika Anda ingin menggunakan timestamp otomatis (created_at dan updated_at)
    public $timestamps = true;

    // Tentukan format waktu jika perlu
    protected $dates = [
        'created_at',
    ];
}
