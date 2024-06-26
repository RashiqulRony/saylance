<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBudget extends Model
{
    use HasFactory;

    protected $table = 'user_budgets';

    protected $fillable = [
        'name',
        'email',
        'budget',
        'description',
    ];
}
