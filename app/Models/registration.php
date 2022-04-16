<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    /*Registration Model, this makes it easier to manage the database */
    use HasFactory;
    protected $table = 'registration';
    protected $primaryKey = 'registrationID';
    public $timestamps = false;
}
