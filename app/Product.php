<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Mass Assigntment Exception を制御するためということだけれども、謎
    protected $fillable = ['name', 'price'];
}
