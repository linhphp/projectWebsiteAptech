<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kindOfNews extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];
    public function conectKindOf(){
    	return $this->hasMany('App\ConectionBlog','kind_of_id','id');
    }
}
