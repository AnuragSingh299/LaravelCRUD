<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = "persons";
    protected $primaryKey = 'person_id';

    use HasFactory;

    protected $fillable = [
        'person_id',
        'name',
        'phone_no',
        'date_of_birth',
        'email',
        'age',
        'description',
        'hobby',
        'gender',
    ];

    // protected $casts = [
        
    // ];
}
