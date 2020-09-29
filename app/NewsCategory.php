<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class NewsCategory extends Model
{
    use SoftDeletes;
    //
    protected $table ='news_categories';

    protected $fillable = [
        'name', 
        'slug',
    ];

     public function conectCategory(){
    	return $this->hasMany('App\ConectionBlog','news_categories_id','id');
    }
}
