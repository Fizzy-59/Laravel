<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    // On autorise le paramètre à être remplis
    protected $fillable = ['url'];
}
