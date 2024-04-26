<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdLink extends Model
{
    use HasFactory;

    protected $table = 'ad_links';

    protected $fillable = [
        'ip_address',
        'links',
        'use_time',
        'status',
    ];
}
