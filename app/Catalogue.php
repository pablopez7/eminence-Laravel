<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogue extends Model
{
    use SoftDeletes;

    protected $table = 'catalogues';

    protected $dates = ['deleted_at'];

    protected $fillable = ['id', 'title', 'description', 'image', 'status', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }
}
