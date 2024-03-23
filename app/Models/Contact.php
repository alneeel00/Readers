<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{

   

    protected $fillable=['Name','email','message','mobile'];
    protected $table = 'Contact';

}