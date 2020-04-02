<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appareil extends Model
{
    /**
     * SQL table name
     * @var string
     */
    protected $table = 'appareils';

    /**
     * Table fillable attributes
     * @var array
     */
    protected $fillable = ['name', 'status'];

}
