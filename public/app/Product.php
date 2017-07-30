<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    protected $dates = ['deleted_at'];

    protected $fillable = ['id', 'title', 'description', 'image', 'status', 'category_id', 'user_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
