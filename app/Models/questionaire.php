<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionaire extends Model
{
    use HasFactory;
    protected $table = 'questionaire';
    protected $primaryKey = 'questionaireID';
    public $timestamps = false;
}
