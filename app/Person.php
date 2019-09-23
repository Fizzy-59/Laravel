<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // On s'assure quue les champs puissent être remplis dans le PersonController
    protected $fillable =
        [
            'first_name',
            'last_name' ,
            'email'     ,
            'phone'     ,
            'city'       
        ];
}
