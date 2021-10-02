<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable =
    [
        "registration_number", "fullname",
        "depart", "hire_date",
        "city", "address", "phone"
    ];
}
