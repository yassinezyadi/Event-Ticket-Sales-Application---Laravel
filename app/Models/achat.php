<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'achat';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'address',
        'country',
        'city',
    ];

   
}

// CREATE TABLE achat (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     firstName VARCHAR(255) NOT NULL,
//     lastName VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     address VARCHAR(255) NOT NULL,
//     country VARCHAR(255) NOT NULL,
//     city VARCHAR(255) NOT NULL,
//     user_id INT NOT NULL,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// );
