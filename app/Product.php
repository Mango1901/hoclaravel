<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'category_id','brand_id','name','price','image','description','content','status'
    ];
    protected $primaryKey = 'id';
    protected $table = 'product';

    public function Category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function Brand()
    {
        return $this->belongsTo('App\Brand','brand_id');
    }
}
