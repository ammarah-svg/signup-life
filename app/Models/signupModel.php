<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signupModel extends Model
{
    use HasFactory;

    protected $table = 'signup'; // Specify the table name associated with this model

    protected $fillable = ['name', 'identity', 'email', 'passcode', 'phone', 'nationality'];
    // Define the fillable attributes to allow mass assignment
}
