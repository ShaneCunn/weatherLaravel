<?php

namespace Weather;

use Illuminate\Database\Eloquent\Model;

class CountryUser extends Model
{
    public $fillable = ['name','total_users'];

}
