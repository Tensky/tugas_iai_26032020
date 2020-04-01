<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Git extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'gits';
    protected $fillable = [
        'id', 'user_id', 'git'
    ];
    public $timestamps = true;
}