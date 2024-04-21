<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLink extends Model
{
    use HasFactory;

    protected $table = 'admin_links';

    protected $fillable = [
        'admin_id',
        'bottom_link',
        'image_link',
        'text_link',
        'ad_link',
    ];
}
