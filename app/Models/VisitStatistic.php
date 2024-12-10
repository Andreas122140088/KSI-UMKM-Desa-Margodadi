<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_url', 
        'ip_address', 
        'accessed_at',
    ];  

    public $timestamps = true;
}
