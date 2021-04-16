<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databases extends Model
{
    protected $table = 'databases';
    protected $fillable = ['lang', 'reload', 'new_db','db_collation'];
}
