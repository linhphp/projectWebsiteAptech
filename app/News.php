<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    //
    protected $table = 'news';
    
    protected $fillable = [
        'newsCategory_id', 
        'title', 
        'slug',
        'source',
        'desc',
        'content',
    ];
     public function conectNew(){
    	return $this->hasMany('App\ConectionBlog','news_id','id');
    }
}
