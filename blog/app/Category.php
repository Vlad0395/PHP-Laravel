<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public function setSlugAttribute($value)
    {
        if(!$value)
        {
            $this->attributes['slug'] = str_slug($this->attributes['name'], '-');
        }
        else
        {
            $this->attributes['slug'] = str_slug($value, '-');
        }
    }
//    public function product()
//    {
//        return $this->belongsTo(Product::class, 'category_id','id');
//    }
}
