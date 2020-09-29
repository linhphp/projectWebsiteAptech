<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConectionBlog extends Model
{
    //
    protected $table = 'conection_blogs';

    protected $fillable = [
        'news_id', 
        'news_category_id', 
        'kind_of_id',
    ];

    function news(){
    	return $this->belongsTo('App\News','news_id','id');
    }
    function category(){
    	return $this->belongsTo('App\NewsCategory','news_category_id','id');
    }
    function KindOfNews(){
    	return $this->belongsTo('App\KindOfNews','kind_of_id','id');
    }
    
}
