<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    public $fillable = [
        'organization_type',
        'description',
        'name',
        'email',
        'telephone',
        'mobile_no',
        'address',
    ];
}
