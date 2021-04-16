<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Columns extends Model
{
    protected $table = 'columns';
    protected $fillable = ['table','db','field_name', 'type','field_length', 'default','field_collation','field_attributes','field_null','field_index','field_a_l','field_comments','field_virtuality','field_move_column'];
}
