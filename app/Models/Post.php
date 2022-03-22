<?php

namespace App\Models;

use App\Accessors\defaultAccessors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, defaultAccessors;

    // protected $table = 'postagens';
    // protected $primaryKey ='id_postagem';
    // protected $keyType = 'string';
    // protected $incremeting = 'false';
    // protected $attributes = [
    //     'active'=>true

    // ];
    // protected $connection = 'pgsql';
    // protected $timestamps = 'true';


protected $fillable = [
    'user_id',
    'title',
    'body',
    'date'
];

// // public function getTitleAttribute($value)
// // {
// //     return strtoupper($value);

// // }

// // public function getTitleAndBodyAttribute()
// // {
// //     return $this->title . ' - ' . $this->body;

// // }

}
