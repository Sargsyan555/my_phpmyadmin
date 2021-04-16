<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableName extends Model
{
    protected $table = 'table_names';
    protected $fillable = ['token', 'table', 'num_fields'];}
