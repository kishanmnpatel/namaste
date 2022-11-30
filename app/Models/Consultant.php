<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','first_name','last_name','email','mobile','gender','profile','address_id','is_sub_consultant','referral','status',
    ];
}
