<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'document', 'birthday', 'active',];

    protected $guarded = ['id',];
}
