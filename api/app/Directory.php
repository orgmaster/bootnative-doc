<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $table = 'directories';
    protected $guarded = [];
    public function docs()
    {
        return $this->hasMany('App\Doc');
    }
}
