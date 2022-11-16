<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'master_user';
    protected $fillable = [
        'user_id',
        'level',
        'password',
        'created_by',
        'updated_by'


    ];
}
