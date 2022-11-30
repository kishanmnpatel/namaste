<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDomain extends Model
{
    use HasFactory;

    protected $fillable = [
        'comapany_id','domain_name','status',
    ];
}
