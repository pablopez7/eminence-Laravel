<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $table = 'clients';

    protected $dates = ['deleted_at'];

    protected $fillable = ['id', 'title', 'description', 'image', 'order', 'kind', 'status', 'user_id'];
}
