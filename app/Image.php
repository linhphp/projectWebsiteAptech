<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    //
    use SoftDeletes;
    protected $table = 'images';
    protected $fillable = [
        'pro_image_id', 
        'news_image_id',
        ''
    ];
    public function pro_image(){
    	return $this->belongsTo('App\Product','pro_image_id','id');
    }
}
