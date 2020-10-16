<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table = 'versions';
    protected $guarded = [];
    public function docs()
    {
        return $this->belongsToMany('App\Doc');
    }
}
