<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberRegister extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'memberID';
    public $timestamps = false;
}
