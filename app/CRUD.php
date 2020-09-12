<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    protected $fillable = [
        'title', 'description'
      ];
}
