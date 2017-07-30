<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed products
 */
class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $dates = ['deleted_at'];

    protected $fillable = ['id', 'title', 'description', 'image', 'status', 'catalogue_id', 'user_id'];

    public function catalogue(){
        return $this->belongsTo(Catalogue::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}