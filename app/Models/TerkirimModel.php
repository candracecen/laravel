<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerkirimModel extends Model
{
    use HasFactory;
    protected $table = 'sent';
    protected $primaryKey = 'id';
}
