<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table = 'docs';
    protected $guarded = [];
    public function versions()
    {
        return $this->belongsToMany('App\Version');
    }

    public function directory()
    {
        return $this->belongsTo('App\Directory');
    }
}
