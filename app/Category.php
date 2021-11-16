<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'category_name','category_description','category_status'
    ];
    protected $primaryKey = 'id';
    protected $table = 'category';
//    public function Product()
//    {
//        return $this->belongsTo('App\Product','category_id');
//    }
}
