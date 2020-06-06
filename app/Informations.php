<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Informations extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'informations';
    protected $primaryKey = '_id';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = [
        'fname','lname','username','email','address','country','state','zip',
    ];
}
